<div style="display:block;margin-left:auto;margin-right:auto;text-align:center;margin-top:10px">
     <h1 class="display-2" style="color:#fff">Validé</h1>
     <nav class="nav justify-content-center">
         <a class="nav-link link-light active" aria-current="page" href="index.php?page=accueil">Accueil</a>
         <a class="nav-link link-light active" aria-current="page" href="index.php?page=sharedTracks&trackPage=1">Musiques locales</a>
         <a class="nav-link link-light" href="index.php?page=search">Recherche</a>
         <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#feedback">
           Retour d'expérience
         </button>
     </nav>
 </div>

 <?php include("views/feedback/v_feedback.php"); ?>

 <button type="button" style="border-radius: 100%; position:absolute; right:0; top:0; margin:1em;" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#userguide">
   <i class="fas fa-question"></i>
 </button>

 <?php include("views/infos/v_userGuide.php"); ?>
