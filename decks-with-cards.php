<?php
require_once("util-db.php");
require_once("model-decks-with-cards.php");

$PageTitle = "Decks With Cards";
include "view-header.php";

$decks = selectDecks();
include "view-decks-with-cards.php";
include "view-footer.php";
?>
