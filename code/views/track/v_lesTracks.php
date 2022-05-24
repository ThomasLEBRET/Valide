    <div class="container d-flex justify-content-center my-4 mb-5" id="lesCartes">
      <div id="mobile-box">

        <?php $ip = new Ip(); ?>

      <?php if(Superglobal::getGet()->get('page') == 'sharedTracks'): ?>
        <h1 class="text-center link-light"><?=$ip->getRegion()?></h1>
        <br>
      <?php endif ?>


<?php for($i = 0; $i < $nbTracks; $i++): ?>
<?php $this->artiste->buildByID($this->lesTracks[$i]->getIdArtist());?>

     <div class="card">
      <div class="upper">
        <img draggable="false" src="<?= $this->lesTracks[$i]->getJacket() ?>" class="img-fluid"> <!-- Album Banner -->
      </div>
      <div class="user text-center">
        <div class="profile">
          <img draggable="false" src="<?= $this->artiste->getUrlimage() ?>" class="rounded-circle" width="80"> <!-- Artist Picture -->
        </div>
      </div>
      <div class="mt-5 text-center">
        <h4 class="mb-0"><a target="_blank" style="text-decoration:none" class="link-dark" href="<?= $this->lesTracks[$i]->getExternals_urls() ?>"><?= $this->lesTracks[$i]->getName() ?></a></h4> <!-- Track name -->

        <span class="text-muted d-block mb-2"><a class="link-secondary" style="text-decoration:none" 
          href="<?= $this->artiste->getExternals_urls() ?>" target="_blank"><?= $this->artiste->getName() ?></a></span>

        <i class="mb-0">Issu de l'album <?= $this->lesTracks[$i]->getAlbumName() ?></i>
        <?php include('views/components/addTrackButton.php'); ?>

        <?php include('views/components/playerTrack.php'); ?>

        <?php include('views/components/sharedTrackButton.php'); ?>
      </div>
    </div>
    
    <br>

<?php endfor ?>

      </div>
    </div>


<?php include('views/components/pagination.php'); ?>