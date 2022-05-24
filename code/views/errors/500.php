<?php $title = "500 - Erreur serveur" ?>

<?php ob_start() ?>

<br>
<div class="link-light">
  <div class="text-center">
  <h1>Erreur serveur</h1>
  <p><?= $e ?></p>
  </div>
</div>
<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
