<?php
require_once("util-db.php");
require_once("model-cards-by-pack.php");

$PageTitle = "Cards By Pack";
include "view-header.php";

$packs = selectCardsByPack($_GET['id']);
include "view-cards-by-pack.php";
include "view-footer.php";
?>
