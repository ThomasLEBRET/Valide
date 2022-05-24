<?php

class Track {
    private string $idAlbum;
    private string $idArtist;
    private string $idTrack;
    private string $name;
    private int $duration_ms;
    private string $external_urls;
    private string $audioExtractURL;
    private int $cptRegion;
    private string $albumType;
    private string $jacket;
    private string $albumName;


    public function __construct() {
        $this->idAlbum = "";
        $this->idArtist = "";
        $this->idTrack = "";
        $this->name = "";
        $this->duration_ms = 0;
        $this->external_urls = "";
        $this->audioExtractURL = "";
        $this->cptRegion = 1;
        $this->albumType = "";
        $this->jacket = "";
    }

    public function getIdalbum() {
        return ($this->idAlbum);
    }

    public function setIdalbum(string $idAlbum) {
        $this->idAlbum = htmlspecialchars($idAlbum);
    }

    public function getIdArtist() {
        return ($this->idArtist);
    }

    public function setIdartist(string $idArtist) {
        $this->idArtist = htmlspecialchars($idArtist);
    }

    public function getIdtrack() {
        return ($this->idTrack);
    }

    public function setIdtrack(string $idTrack) {
        $this->idTrack = htmlspecialchars($idTrack);
    }

    public function getName() {
        return (html_entity_decode($this->name));
    }

    public function setName(string $name) {
        $this->name = htmlspecialchars($name);
    }

    public function getDurationms() {
        return intval($this->duration_ms);
    }

    public function getDurationConvert() {
        return GlobalFunctions::convertTime($this->duration_ms);
    }

    public function setDurationms(int $duration_ms) {
        $this->duration_ms = intval($duration_ms);
    }

    public function getExternals_urls() {
        return ($this->external_urls);
    }

    public function setExternals_urls(string $external_urls) {
        $this->external_urls = htmlspecialchars($external_urls);
    }

    public function getAudioextrackURL() {
        return ($this->audioExtractURL);
    }

    public function setAudioextrackURL(string $audioExtractURL) {
        $this->audioExtractURL = htmlspecialchars($audioExtractURL);
    }

    public function getCompteurRegion() {
      return intval($this->cptRegion);
    }

    public function setcompteurRegion($newCptRegion) {
      $this->cptRegion = intval($newCptRegion);
    }

    public function getAlbumType() {
      return ($this->albumType);
    }

    public function setAlbumType($albumType) {
      $this->albumType = htmlspecialchars($albumType);
    }

    public function getJacket() {
        return ($this->jacket);
    }

    public function setJacket($jacket) {
        $this->jacket = htmlspecialchars($jacket);
    }

    public function getAlbumName() {
        return ($this->albumName);
    }

    public function setAlbumName($albumName) {
        $this->albumName = htmlspecialchars($albumName);
    }

    public function loadTrack($key, $val) {
        switch($key) {
            case 'artists':
                if(!empty($val[0]['id']))
                  $this->setIdartist($val[0]['id']);
                break;
            case 'album':
                if(!empty($val['id']))
                  $this->setIdalbum($val['id']);
                if(!empty($val['album_type']))
                  $this->setAlbumType($val['album_type']);
                if(!empty($val['images']))
                    $this->setJacket($val['images'][0]['url']);
                if(!empty($val['name']))
                    $this->setAlbumName($val['name']);
                break;
            case 'id':
                if(!empty($val))
                  $this->setIdtrack($val);
                break;
            case "external_urls":
                if(!empty($val['spotify']))
                  $this->setExternals_urls($val['spotify']);
                break;
            case 'name':
                if(!empty($val))
                  $this->setName($val);
                break;
            case 'duration_ms':
                if(!empty($val))
                  $this->setDurationms($val);
                break;
            case 'preview_url':
                if(!empty($val))
                    $this->setAudioextrackURL($val);
                break;
        }
    }
}
