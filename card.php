<?php
require_once("util-db.php");
require_once("model-card.php");

$PageTitle = "Cards";
include "view-header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      insertCard($_POST['cName'],$_POST['cNum']);
        break;
    }
}

$cards = selectCard();
include "view-card.php";
include "view-footer.php";
?>
