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
      if ( insertCard($_POST['cName'],$_POST['cNum']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Added! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Added! </div>';
      }
        break;
    }
}

$cards = selectCard();
include "view-card.php";
include "view-footer.php";
?>
