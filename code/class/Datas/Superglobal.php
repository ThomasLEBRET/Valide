<?php

require_once("InfoSuperglobal.php");

/**
 * Classe pour gérer les variables superglobal ($_GET et $_POST actuellement)
 */
class Superglobal {

    private static $get;
    private static $post;

    /**
     * constructeur par défaut
     */
    public function __construct() {
      // Ajoute 2 objet InfoSuperglobal $_GET et $_POST
        self::$get = new InfoSuperglobal($_GET);
        self::$post = new InfoSuperglobal($_POST);
    }

    /**
     * Retourne le contenu de la variable super globale $_GET encapsulé dans l'objet InfoSuperglobal
     * @return array le tableau associatif $_GET dans l'objet InfoSuperglobal
     */
    public static function getGet() {
        return self::$get;
   }

   /**
    * Retourne le contenu de la variable super globale $_POST encapsulé dans l'objet InfoSuperglobal
    * @return array le tableau associatif $_POST dans l'objet InfoSuperglobal
    */
    public static function getPost() {
       return self::$post;
   }
}
