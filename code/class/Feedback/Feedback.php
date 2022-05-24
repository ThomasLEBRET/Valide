<?php

  class Feedback {
      private string $sexe;
      private string $note;
      private string $avis;


  public function __construct() {
      $this->sexe = "";
      $this->note = "";
      $this->avis = "";
  }

  public function getSexe() {
      return htmlspecialchars($this->sexe);
  }

  public function setSexe(string $sexe) {
      $this->sexe = htmlspecialchars($sexe);
  }

  public function getNote() {
      return htmlspecialchars($this->note);
  }

  public function setNote(string $note) {
      $this->note = htmlspecialchars($note);
  }

  public function getAvis() {
      return $this->avis;
  }

  public function setAvis(string $avis) {
      $this->avis = $avis;
  }
}
