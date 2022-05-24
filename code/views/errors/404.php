<?php $title = "404 - Page non trouvée" ?>

<?php ob_start() ?>
<br>
<div class="link-light">
  <div class="text-center">
    <h1>Page non trouvée</h1>
    <p>Evitez de modifier l'URL</p>
  </div>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
