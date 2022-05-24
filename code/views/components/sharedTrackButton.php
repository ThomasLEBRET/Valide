<?php if(Superglobal::getGet()->get('page') == 'sharedTracks'): ?>
  <h5><?= $this->lesTracks[$i]->getcompteurRegion() ?></h5>
  <button type="submit" class="btn btn-danger disabled">
    <i class="fas fa-heart"></i>
  </button>
<?php endif ?>