<?php $title = "Validé - Tracks"; ?>
<?php ob_start() ?>


<div style="width:100%;">

  <form action="index.php?page=tracks" method="post">


  <?php $lesRegions = ORMBackoffice::lesRegions(); ?>
  <label class="link-light">Filtre par région</label>
  <select name="codeRegion">
    <?php for ($i=0; $i < count($lesRegions); $i++): ?>
      <option value="<?=$lesRegions[$i]['codeRegion']?>"><?=$lesRegions[$i]['codeRegion']?></option>
    <?php endfor ?>
  </select>

  <input type="submit" value="Chercher">
    </form>

    <br>


<h1 class="link-light">Total : <?= count($lesTracksBD) ?></h1>


<?php for($i = 0; $i < count($lesTracksBD); $i++): ?>

  <div class="card" style="width:18em; margin:0 auto">
    <div class="card-body">
      <p>Id : <?= $lesTracksBD[$i]['id'] ?></p>
      <p>IdMusique : <?= $lesTracksBD[$i]['idMusique'] ?></p>
      <p>Code Région : <?= $lesTracksBD[$i]['codeRegion'] ?></p>
      <p>Compteur : <?= $lesTracksBD[$i]['cptRegion'] ?></p>
    </div>
  </div>
  <br>

<?php endfor ?>

</div>

<?php $content = ob_get_clean() ?>
<?php require_once("template.php"); ?>
