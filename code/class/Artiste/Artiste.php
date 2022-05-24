<?php

  class Artiste {
      private string $name;
      private string $external_urls;
      private int $followers;
      private array $genres;
      private string $urlImage;


  public function __construct() {
      $this->name = "";
      $this->external_urls = "";
      $this->followers = 0;
      $this->genres = array();
      $this->urlImage = "";
  }

  public function buildByID($id) {
    $tabArt = SpotifyAPI::queryAPIShell($id,"artists",false);
    foreach($tabArt as $key => $val) {
      $this->loadArtiste($key, $val);
    }
  }

  public function getName() {
      return htmlspecialchars(html_entity_decode($this->name));
  }

  public function setName(string $name) {
      $this->name = htmlspecialchars($name);
  }

  public function getExternals_urls() {
      return htmlspecialchars($this->external_urls);
  }

  public function setExternals_urls(string $external_urls) {
      $this->external_urls = htmlspecialchars($external_urls);
  }

  public function getFollowers() {
      return intval($this->followers);
  }

  public function setFollowers(int $followers) {
      $this->followers = intval($followers);
  }

  public function getGenres() {
      return $this->genres;
  }

  public function setGenres(array $genres) {
      $this->genres = $genres;
  }

  public function getUrlimage() {
      return htmlspecialchars($this->urlImage);
  }

  public function setUrlimage($urlImage) {
        $this->urlImage = htmlspecialchars($urlImage);
  }

  public function loadArtiste($key, $val) {
          switch($key) {
              case "name":
                  if(!empty($val))
                    $this->setName($val);
                  break;
              case "external_urls":
                  if(!empty($val['spotify']))
                    $this->setExternals_urls($val['spotify']);
                  break;
              case "followers":
                  if(!empty($val['total']))
                    $this->setFollowers($val['total']);
                  break;
              case "genres":
                  if(count($val) > 0)
                    $this->setGenres($val);
                  break;
              case "images":
                  if(!empty($val[0]['url']))
                      $this->setUrlimage($val[0]['url']);
                  break;
          }
      }

  public function getHtmlImage($w, $h) {
    if($this->getUrlimage() != "")
      return "<img height='".$w."', width='".$h."', src='".$this->getUrlimage()."' alt='Artiste : ".$this->getName()."'>";
  }
}
