<?php $title = "Validé - CGU"; ?>

<?php ob_start() ?>

<?php require_once("views/consent/v_agreements.php"); ?>

<?php $content = ob_get_clean() ?>
<?php require_once("views/template.php"); ?>
