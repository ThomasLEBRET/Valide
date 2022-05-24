<?php
  class Ip {

    private string $region;
    private string $country;

    public function __construct() {
      if(!empty(Session::getCookies()['latitude']) &&!empty(Session::getCookies()['longitude'])) {
        $latitude = Session::getCookies()['latitude'];
        $longitude = Session::getCookies()['longitude'];
        $url = 'curl "https://api.mapbox.com/geocoding/v5/mapbox.places/'.$longitude.','.$latitude.'.json?country=fr&limit=1&types=place&language=fr&access_token='.__GEOLOC__.'"';
        $datasLocation = json_decode(shell_exec($url), true);

        $this->region = $datasLocation['features'][0]['text_fr'];
        $this->country = "FR";
      } else {
        $this->region = "Globale";
        $this->country = "FR";
      }
    }

    private function hydrate(stdClass $dataIP) {
      $this->region = (string)$dataIP->region;
      $this->country = (string)$dataIP->country;
    }

    public function getRegion() {
      return htmlspecialchars($this->region);
    }

    public function getCountry() {
      return htmlspecialchars($this->country);
    }

  }
