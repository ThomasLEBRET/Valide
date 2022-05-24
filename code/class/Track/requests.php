<?php
global $nbPage;

$addNewTrack = "INSERT INTO MUSIQUE(idMusique, codeRegion, cptRegion) VALUES(?,?,1)";
$getTrack = "SELECT * FROM MUSIQUE WHERE idMusique = ? AND codeRegion  = ?";
$getAllTracks = "SELECT idMusique FROM MUSIQUE";
$getAllTracksByRegion = "SELECT * FROM `MUSIQUE` WHERE codeRegion = ? ORDER BY `MUSIQUE`.`cptRegion` DESC, `MUSIQUE`.`id` ASC LIMIT 5 OFFSET ";
$getNbrTracksByRegion = "SELECT COUNT(*) FROM `MUSIQUE` WHERE codeRegion = ?";
$ajouteCompteurRegion = "UPDATE MUSIQUE SET cptRegion = cptRegion + 1 WHERE idMusique = ? AND codeRegion = ?";
