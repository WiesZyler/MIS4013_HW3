<?php
require_once("util-db.php");
require_once("model-card.php");

$PageTitle = "Cards";
include "view-header.php";

$cards = selectCard();
include "view-card.php";
include "view-footer.php";
?>
