<?php
    $title = "Validé - Aucun résultat";

    if(count($this->lesArtistes) > 0) {
        $title = "Validé - Les artistes";
    }
?>
<?php ob_start() ?>

<?php require_once("views/components/searchBar.php") ?>

<?php
    if(count($this->lesArtistes) > 0)
        require_once("views/artiste/v_lesArtistes.php");
?>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
