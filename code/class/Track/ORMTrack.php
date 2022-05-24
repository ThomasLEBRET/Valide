<?php

require_once("class/Datas/Database.php");
require_once("Track.php");
include("requests.php");

    /**
     * Classe static ORM pour la classe objet Utilisateur
     */
    class ORMTrack extends Database {
      public static function addTrack($idTrack) {
        global $addNewTrack;

        $ip = new Ip();
        return self::insert($addNewTrack, [$idTrack, $ip->getRegion()]);
      }

      public static function incrementeCompteurRegion($idTrack, $region) {
        global $ajouteCompteurRegion;

        return self::update($ajouteCompteurRegion, [$idTrack, $region]);
      }

      public static function get($idTrack) {
        global $getTrack;

        $ip = new Ip();
        $idRecup = self::simpleSelect($getTrack, [$idTrack, $ip->getRegion()]);
        return $idRecup;
      }

      public static function getTrack($idTrack) {
        global $getTrack;

        $idRecup = self::simpleSelect($getTrack, [$idTrack])[0];

        $tab = SpotifyAPI::queryAPIShell($idTrack, "tracks", false);

        $track = new Track();
        for($i = 0; $i < count($tab); $i++) {
            foreach($tab as $key => $val) {
                $track->loadTrack($key,$val);
            }
        }
        return $track;
      }

      public static function getAllTracks($codeRegion = "") {
        global $getAllTracks;

        if(isset($codeRegion)) {
          $getAllTracks .= " WHERE codeRegion = '".$codeRegion."'";
          $idsRecup = self::simpleSelect($getAllTracks, []);

          return $idsRecup;
        }

        $idsRecup = self::simpleSelect($getAllTracks, []);
        $lesTracks = array();
        $track = new Track();

        for($i = 0; $i < count($idsRecup); $i++) {
          $id = $idsRecup[$i]['idMusique'];
          $tab = SpotifyAPI::queryAPIShell($id, "tracks", false);

          foreach($tab as $key => $val) {
              $track->loadTrack($key,$val);
          }
          array_push($lesTracks, $track);
          $track = new Track();
        }

        return $lesTracks;
      }

      public static function getAllTracksByRegion($nbPage = 1) {
        global $getAllTracksByRegion;

        $getAllTracksByRegion .= ($nbPage - 1)*5;

        $ip = new Ip();
        $idsRecup = self::simpleSelect($getAllTracksByRegion, [$ip->getRegion()]);
        $lesTracks = array();
        $idsMusique = array();
        $track = new Track();

        for ($i=0; $i < count($idsRecup); $i++)
          array_push($idsMusique, $idsRecup[$i]['idMusique']);

        $lesIdStr = "";
        for ($i=0; $i < count($idsMusique); $i++) {
          $lesIdStr .= "$idsMusique[$i]";
          if($i != count($idsMusique) - 1)  $lesIdStr.= ",";
        }

        if(count($idsMusique) == 0)
          return array();
        else
          $tab = SpotifyAPI::queryAPIShell($lesIdStr, "tracks", false, true)['tracks'];

        for($i = 0; $i < count($idsRecup); $i++) {
          $cptRegion = $idsRecup[$i]['cptRegion'];

          foreach($tab[$i] as $key => $val) {
              $track->loadTrack($key,$val);
          }
          $track->setcompteurRegion($cptRegion);
          array_push($lesTracks, $track);
          $track = new Track();
        }

        return $lesTracks;
      }

      public static function countTracksByRegion() {
        global $getNbrTracksByRegion;

        $ip = new Ip();
        return self::count($getNbrTracksByRegion, [$ip->getRegion()]);
      }
    }
