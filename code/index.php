<?php
    require_once("keys.php");

    require_once("class/IP/Ip.php");
    require_once("class/Datas/Session.php");
    require_once("class/Datas/Debug.php");
    require_once("class/Routeur.php");
    require_once("class/GlobalFunctions.php");
    require_once("class/SpotifyAPI.php");
    require_once("class/Datas/Superglobal.php");

    $routeur = new Routeur();
    $routeur->run();
