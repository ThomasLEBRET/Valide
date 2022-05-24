<?php

require_once("Database.php");
require_once("../class/Track/Track.php");
require_once("../class/Artiste/Artiste.php");
require_once("../class/Feedback/Feedback.php");
include("requests.php");

    /**
     * Classe static ORM pour la classe objet Utilisateur
     */
    class ORMBackoffice extends Database {
      public static function tracks($codeRegion = "%") {
        global $tracks;


        return self::simpleSelect($tracks, [$codeRegion]);
      }

      public static function lesRegions() {
        global $regions;

        return self::simpleSelect($regions, []);
      }

      public static function feeds($note = 1) {
        global $feedbacksNote;

        return self::simpleSelect($feedbacksNote, [$note]);
      }
    }
