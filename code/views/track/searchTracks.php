<?php
    $nbTracks = count($this->lesTracks);
    $title = "Validé - Recherche";

    if($nbTracks > 0) {
        $title = "Validé - Les musiques";
    }
?>
<?php ob_start() ?>

<?php
    $page = Superglobal::getGet()->get('page');
    if($page == 'search' || $page == 'artists' || $page == 'tracks')
      require_once("views/components/searchBar.php") ?>

<?php
    if($nbTracks > 0)
        require_once("views/track/v_lesTracks.php");
    else
        require_once('views/track/v_homeTracks.php');
?>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
