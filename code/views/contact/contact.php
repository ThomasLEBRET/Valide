<?php $title = "Validé - Contact"; ?>

<?php ob_start() ?>

<div class="jumbotron jumbotron-fluid link-light" style="padding:5em">
  <div class="container">
    <h1 class="display-4">Contact</h1>
    <br>
    <p class="lead">
      Bonjour à vous cher utilisateur !
      Si vous avez une question, trouvez un bug ou encore nous dire que notre site est le meilleur, n’hésitez pas à nous <a class="link-light" href="mailto:valide.ups@gmail.com">contacter</a> sur notre adresse mail !
      Merci d’avance de votre retour d'expérience.
    </p>
    <p class="lead">
      Partagez nous vos meilleures musiques ;)
    <p>
  </div>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
