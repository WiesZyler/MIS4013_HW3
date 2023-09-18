<?php
require_once("util-db.php");
require_once("model-card.php");
$PageTitle = "Home";
include "view-header.php";
$cards = selectCard();
include "view-card.php";
include "view-footer.php";
?>
