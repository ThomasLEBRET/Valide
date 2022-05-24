<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#575757">
    <title><?php if(!isset($title)) $title = "Validé - Homepage"; echo $title ?></title>
    <link rel="stylesheet" type='text/css' href="../public/css/main.css">
    <link rel="stylesheet" type='text/css' href="../public/css/bootstrap/bootstrap.css">
    <script defer src="../public/css/faws/js/all.js"></script>
    <link rel="shortcut icon" href="public/img/icon/icon-valide.ico">
</head>

  <body class="bg-dark">

    <script type="text/javascript" src="../public/js/bootstrap/bootstrap.js"></script>

    <?php require_once('views/v_homepage.php'); ?>

  <?= $content ?>

</body>

<footer>
  </br>
    <div style="position:absolute;bottom:0;width:100%;padding-top:20px;">
      <a style="left:2%; bottom:2%;text-decoration:none;padding:1em;" href="index.php?page=apropos" class="link-light position-fixed">À propos</a>
      <a style="right:2%; bottom:2%;text-decoration:none;padding:1em" href="index.php?page=contact" class="link-light position-fixed">Contact</a>
    </div>
</footer>

</html>
