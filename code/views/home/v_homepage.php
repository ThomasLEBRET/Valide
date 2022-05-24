<?php $title = "Validé - Homepage"; ?>

<?php ob_start() ?>

<main class="flex-shrink-0">
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Validé</h1>
                        <p class="lead fw-normal text-white-50 mb-4">La première plateforme de streaming audio collaborative et géociblée</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">C'est parti !</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="index.php?page=apropos">En apprendre plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="public/img/valide.png" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 bg-light" id="features" >
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Une autre manière de partager</h2></div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Simple</h2>
                            <p class="mb-0">Un bouton, une recherche et ajouter vos artistes préférés dans la playlist de votre départment !</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Géociblé</h2>
                            <p class="mb-0">Notre géolocalisation anonyme vous permet de voir quels musiques sont écoutées autour de vous, en toute discrétion.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <h2 class="h5">Rapide</h2>
                            <p class="mb-0">La géolocalisation dynamique et transparente vous permet d'écouter n'importe quel morceau partagé sans problèmes</p>
                        </div>
                        <div class="col h-100">
                            <h2 class="h5">Pertinent</h2>
                            <p class="mb-0">Notre connexion à l'API de Spotify vous garanti de toujours avoir les dernières musiques tendances.</p>
                        </div>
                    </div>
                </div>
                <button style="width:50%; margin:0 auto; margin-top:5em; padding:1em;" type="button" class="btn btn-secondary" onclick="window.location.href='index.php?page=sharedTracks&trackPage=1'">
                  <span class="fas fa-music" aria-hidden="true"></span>
                  Découvrez gratuitement vos artistes géociblés
                </button>

            </div>
        </div>
    </section>
</main>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
