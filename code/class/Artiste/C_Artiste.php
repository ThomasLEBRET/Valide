<?php

    require_once("Artiste.php");

    class C_Artiste extends Artiste {

        private array $lesArtistes;
        private Artiste $artiste;
        private $debug;

        public function __construct() {
            $this->artiste = new Artiste();
            $this->lesArtistes = array();
            $this->debug = new Debug();
        }

        public function viewArtists() {
          require_once('views/artiste/searchArtists.php');
        }

        public function findArtists($query) {
            $tab = SpotifyAPI::queryAPIShell($query, "artist")["artists"]["items"];

            for($i = 0; $i < count($tab); $i++) {
                foreach($tab[$i] as $key => $val) {
                    $this->artiste->loadArtiste($key, $val);
                }
                array_push($this->lesArtistes, $this->artiste);
                $this->artiste = new Artiste();
            }
            $this->viewArtists();
        }
    }
