<div class="view">
  <div class="mask gradient-card align-items-center">
    <div class="container d-flex justify-content-center my-4 mb-5">
      <div id="mobile-box">

<?php for($i = 0; $i < count($this->lesArtistes); $i++): ?>

    <div class="card">
      <div class="view">
        <?php if(!empty($this->lesArtistes[$i]->getUrlimage())): ?>
          <img class="card-img-top" src="<?= $this->lesArtistes[$i]->getUrlimage() ?>"
               alt="Card image cap">
        <?php endif?>
        <a href="<?= $this->lesArtistes[$i]->getExternals_urls() ?>" target="_blank">
          <div class="mask gradient-card"></div>
        </a>
      </div>
      <div class="card-body text-center">
        <h5 class="h5 font-weight-bold"><a href="<?= $this->lesArtistes[$i]->getExternals_urls() ?>" target="_blank"><?= $this->lesArtistes[$i]->getName();?></a></h5>
        <p class="mb-0"><?= $this->lesArtistes[$i]->getName(); ?></p>

      </div>
    </div>
    <br>

<?php endfor ?>

      </div>
    </div>
  </div>
</div>
