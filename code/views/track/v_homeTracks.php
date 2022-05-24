<?php  $ip = new Ip(); ?>

<?php if($ip->getRegion()) {  ?>
  <br>

<div class="jumbotron jumbotron-fluid link-light" style="display:block;margin-left:auto;margin-right:auto;text-align:center;margin-top:10px">
  <div class="container">
    <h1 class="display-4"><?= $ip->getRegion() ?></h1>
    <p class="lead">Soyez le premier à partager vos musiques.</p>
  </div>
</div>

<?php  } else { ?>
  <div class="jumbotron jumbotron-fluid link-light" style="display:block;margin-left:auto;margin-right:auto;text-align:center;margin-top:10px">
    <div class="container">
      <h1 class="display-4">Nous n'avons pas trouvé une géolocalisation satisfaisante</h1>
      <p class="lead">Veuillez vous référer au guide d'utilisation pour plus d'informations.</p>
      <p class="lead">Vous pouvez toujours chercher des artistes et des musiques</p>
    </div>
  </div>
<?php } ?>
