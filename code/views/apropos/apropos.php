<?php $title = "Validé - A propos"; ?>

<?php ob_start() ?>

<div class="jumbotron jumbotron-fluid link-light" style="padding:5em">
  <div class="container">
    <h1 class="display-4">À propos</h1>
    <br>
    <p class="lead">
      Bonjour à vous et bienvenue sur notre site internet Validé.
      Nous sommes 5 étudiants de L3 MIAGE à l’université Paris Saclay d'Orsay.
      L'équipe se compose de : Alex, Marc, Thomas, Ainoa et Dyhia .
      Ce site est né grâce à notre projet tutoré de fin de diplôme.
      Passionnés et grands amoureux de musique, nous aimons partager celle-ci pour en parler à nos amis.
      Voilà pourquoi nous avons créé ce site qui vous permet de partager une ou plusieurs musiques que vous aimez.
      Il vous suffit de cliquer sur “Recherche” qui vous redirigera vers la page permettant de trouver la musique de votre choix.
      Cette musique sera après l’ajout, mise automatiquement dans la liste des musiques ajoutées par la communauté.
      Cette page est l’accueil du site et vous pouvez comme pour la recherche avoir un extrait audio pour vous faire un avis objectif de celle-ci.
      Si vous avez apprécié la musique vous n'avez plus qu'à cliquer sur le titre de la musique qui vous dirigera directement sur la page Spotify de celle-ci.
      Pour le moment nous avons fait le choix de travailler seulement avec l’API Spotify mais pour les prochaine mise à jour nous implémenterons celle de Youtube et Deezer.
      Merci pour cette lecture, si vous avez quelque chose à nous dire n'hésitez pas à nous contacter avec le lien Contact qui se situe en bas à droite de votre écran.
    </p>
    <p class="lead">
      Partagez nous vos meilleures musiques ;)
    <p>
  </div>
</div>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
