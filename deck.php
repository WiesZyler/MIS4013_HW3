<?php
require_once("util-db.php");
require_once("model-deck.php");

$PageTitle = "Decks";
include "view-header.php";

$cards = selectDeck();
include "view-deck.php";
include "view-footer.php";
?>
