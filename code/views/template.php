<?php
if(!isset($page)) {
  $page= 'accueil';
}

?>

<?php require_once("public/head.php"); ?>
<?php
  if($page != 'consent' )  {
      require_once("public/header.php");
  }

?>

  <?= $content ?>

<?php require_once('views/components/v_cookieBar.php'); ?>
<?php require_once("public/footer.php"); ?>
