<?php

$regions = "SELECT DISTINCT codeRegion FROM MUSIQUE";
$tracks = "SELECT * FROM MUSIQUE WHERE codeRegion LIKE ?  ORDER BY id ASC";
$feedbacksNote = "SELECT * FROM FEEDBACK WHERE note >= ?";
