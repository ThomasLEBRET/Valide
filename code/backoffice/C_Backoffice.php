<?php

    require_once("ORMBackoffice.php");
    require_once("Database.php");

    require_once('../class/Track/Track.php');
    require_once('../class/Feedback/Feedback.php');


    class C_Backoffice {

        private Track $track;
        private Feedback $feedback;

        public function __construct() {
            $this->track = new Track();
            $this->feedback = new Feedback();
        }

        public function homepage() {
          require_once("views/template.php");
        }

        public function tracks($post) {
          if(!empty($post->get('codeRegion')) > 0)
            $lesTracksBD = ORMBackoffice::tracks($post->get('codeRegion'));
          else
            $lesTracksBD = ORMBackoffice::tracks();
          require_once("views/v_tracks.php");
        }

        public function feeds($post) {
          if(!empty($post->get('note')))
            $lesFeeds = ORMBackoffice::feeds($post->get('note'));
          else
            $lesFeeds = ORMBackoffice::feeds();
          require_once("views/v_feedback.php");
        }

    }
