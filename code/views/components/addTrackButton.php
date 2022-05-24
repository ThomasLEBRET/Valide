<?php if(Superglobal::getGet()->get('page') != 'sharedTracks'): ?>
  <br>
  <form action="index.php?page=addTrack" method="POST">
      <input type="hidden" value="<?=$this->lesTracks[$i]->getIdtrack() ?>" name="idTrack">
      <input class="btn btn-outline-dark" style="width:100%" type="submit" value="Ajouter">
  </form>
<?php endif ?>