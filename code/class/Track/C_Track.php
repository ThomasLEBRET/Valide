<?php

    require_once("Track.php");
    require_once("ORMTrack.php");
    require_once('class/Artiste/Artiste.php');

    class C_Track extends Track {

        private array $lesTracks;
        private Track $track;
        private $debug;
        private $artiste;

        public function __construct() {
            $this->track = new Track();
            $this->lesTracks = array();
            $this->debug = new Debug();
            $this->artiste = new Artiste();
        }

        public function addTrack() {
          $id = ORMTrack::get(Superglobal::getPost()->get('idTrack'));

          if(count($id) == 0)
            ORMTrack::addTrack(Superglobal::getPost()->get('idTrack'));
          else {
            $ip = new Ip();
            if($ip->getRegion() == $id[0]['codeRegion'])
              ORMTrack::incrementeCompteurRegion($id[0]['idMusique'], $id[0]['codeRegion']);
          }
          header('Location: index.php?page=sharedTracks&trackPage=1');
        }

        public function getTrack($params) {
          $this->track = ORMTrack::getTrack($params->get('idTrack'));
        }

        public function getAllTracks() {
          $this->lesTracks = ORMTrack::getAllTracks();
        }

        public function getAllTracksByRegion($nbPage = 1) {
          if(!empty(Session::getCookies()['latitude'])) {
            $this->lesTracks = ORMTrack::getAllTracksByRegion($nbPage);
          }

          $this->viewTracks();
        }

        public function viewTracks() {
          if(empty($this->lesTracks)) {
            $this->lesTracks = ORMTrack::getAllTracksByRegion();
          }
            $nbTracksByRegion = ORMTrack::countTracksByRegion();;
            require_once('views/track/searchTracks.php');
        }

        public function findTracks($query) {
            $tab = SpotifyAPI::queryAPIShell($query, "track")["tracks"]["items"];


            for($i = 0; $i < count($tab); $i++) {
                foreach($tab[$i] as $key => $val) {
                    $this->track->loadTrack($key,$val);
                }
                array_push($this->lesTracks, $this->track);
                $this->track = new Track();
            }
            $this->viewTracks();
        }
    }
