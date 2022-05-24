<?php
require_once("C_Backoffice.php");

class Routeur {
    private $superglobal;

    private $c_Backoffice;

    public function __construct() {
        $this->superglobal = new Superglobal();

        $this->c_Backoffice = new C_Backoffice();
    }

    public function run() {
        $post = Superglobal::getPost();
        $get  = Superglobal::getGet();

        $page = $get->get('page');

        try {
            if($page) {
                switch($page) {
                    case 'tracks':
                      $this->c_Backoffice->tracks($post);
                      break;
                    case 'feeds':
                      $this->c_Backoffice->feeds($post);
                      break;
                    case 'homepage':
                      $this->c_Backoffice->homepage();
                      break;
                    default:
                      header('Location: index.php?page=homepage');
                      break;
                    }
                }
                else {
                    header('Location: index.php?page=homepage');
                  }
            }
        catch (Exception $e) {
            require_once('../views/errors/500.php');
          }

    }

}
?>
