<?php
require_once("Artiste/C_Artiste.php");
require_once("Track/C_Track.php");
require_once("Feedback/C_Feedback.php");

class Routeur {
    private $superglobal;

    private $c_Artiste;
    private $c_Track;

    public function __construct() {
        $this->superglobal = new Superglobal();

        $this->c_Artiste = new C_Artiste();
        $this->c_Track = new C_Track();
        $this->c_Feedback = new C_Feedback();
    }

    private function redirectArtistChoice() {
      if(Superglobal::getGet()->get("q")) {
          $this->c_Artiste->findArtists(Superglobal::getGet()->get("q"));
      } else {
          $this->c_Artiste->viewArtists();
      }
    }

    private function redirectTracks() {
      if(Superglobal::getGet()->get("q")) {
          $this->c_Track->findTracks(Superglobal::getGet()->get("q"));
      } else {
          $this->c_Track->viewTracks();
      }
    }

    private function sharedTracks() {
      if(empty(Superglobal::getGet()->get('trackPage')))
        header('Location: index.php?page=sharedTracks&trackPage=1');
      $this->c_Track->getAllTracksByRegion(Superglobal::getGet()->get('trackPage'));
    }

    private function search() {
      require_once('views/search.php');
    }

    private function accueil() {
      require_once('views/home/v_homepage.php');
    }

    public function run() {
        $post = Superglobal::getPost();
        $get  = Superglobal::getGet();
        $page = $get->get('page');

        try {
            if($page) {
                switch($page) {
                    case 'sharedTracks':
                        $this->sharedTracks();
                        break;
                    case 'accueil':
                        $this->accueil();
                        break;
                    case 'search':
                        $this->search();
                        break;
                    case 'artists':
                        $this->redirectArtistChoice();
                        break;
                    case 'addTrack':
                        $this->c_Track->addTrack();
                        break;
                    case 'tracks':
                        $this->redirectTracks();
                        break;
                    case 'apropos':
                      require_once('views/apropos/apropos.php');
                      break;
                    case 'contact':
                      require_once('views/contact/contact.php');
                      break;
                    case 'sendFeedback':
                      $this->c_Feedback->sendFeedback($post);
                      break;
                    default:
                        require_once('views/home/v_homepage.php');
                        break;
                    }
                }
                else {
                    $this->accueil();
                  }
            }
        catch (Exception $e) {
            require_once('views/errors/500.php');
          }

    }

}
?>
