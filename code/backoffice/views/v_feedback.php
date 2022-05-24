<?php $title = "Validé - Feedbacks"; ?>
<?php ob_start() ?>


<div style="width:100%;">

  <form action="index.php?page=feeds" method="post">


  <?php $lesRegions = ORMBackoffice::lesRegions(); ?>

  <label class="link-light">Note minimale</label>
  <input type="number" name="note" value="1" min="1">

  <input type="submit" value="Chercher">
  </form>

  <br>


<h1 class="link-light">Total : <?= count($lesFeeds) ?></h1>


<?php for($i = 0; $i < count($lesFeeds); $i++): ?>

  <div class="card" style="width:18em; margin:0 auto">
    <div class="card-body">
      <p>Id : <?= $lesFeeds[$i]['id'] ?></p>
      <p>Sexe : <?= $lesFeeds[$i]['sexe'] ?></p>
      <p>Note : <?= $lesFeeds[$i]['note'] ?></p>
      <p>Avis : <?= $lesFeeds[$i]['avis'] ?></p>
    </div>
  </div>
  <br>

<?php endfor ?>

</div>

<?php $content = ob_get_clean() ?>
<?php require_once("template.php"); ?>
