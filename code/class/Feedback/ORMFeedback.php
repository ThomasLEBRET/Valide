<?php

require_once("class/Datas/Database.php");
require_once("Feedback.php");
include("requests.php");

    /**
     * Classe static ORM pour la classe objet Utilisateur
     */
    class ORMFeedback extends Database {
      public static function sendFeedback($feedback) {
        global $sendFeedback;

        return self::insert($sendFeedback, [$feedback->getSexe(), $feedback->getNote(), $feedback->getAvis(), ]);
      }
    }
