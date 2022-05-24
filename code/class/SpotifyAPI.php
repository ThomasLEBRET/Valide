<?php

class SpotifyAPI {


  public static function queryAPIShell($q, $type, $isSearch = true, $multiTracksById = false) {
    $ip = new Ip();

    $q = str_replace(" ", "+", $q);

    $shellRequestToken = 'curl -X "POST" -H "Authorization: Basic '.base64_encode(__CID__.':'.__CIS__).'" -d grant_type=client_credentials https://accounts.spotify.com/api/token';
    $token = shell_exec($shellRequestToken);
    $token = json_decode("[".$token."]", true)[0]["access_token"];

    $url = "https://api.spotify.com/v1/";
    if($isSearch)
      $url = $url."search?q=/".$q."&type=$type"."&market=".$ip->getCountry()."&limit=5";
    else {
      if($multiTracksById) {
        $url .= $type."?market=".$ip->getCountry()."&ids=$q";
      } else {
        $url = $url.$type."/".$q;
      }
    }

    $request = 'curl -X "GET" "'.$url.'" -H "Accept: application/json" -H "Content-Type: application/json" -H "Authorization: Bearer '.$token.'"';

    $res = shell_exec($request);

    return json_decode("[".$res."]", true)[0];
  }

}
