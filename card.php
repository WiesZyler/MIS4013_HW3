<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("util-db.php");
require_once("model-card.php");

$PageTitle = "Cards";
include "view-header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertCard($_POST['cNum'],$_POST['cName'],$_POST['pID'],$_POST['cType'],$_POST['cAtt'],$_POST['cST'],$_POST['cLevel'],$_POST['mType'],$_POST['cRarity']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Added! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Added! </div>';
      }
        break;
    }
  case  "Delete":
      if (deleteCard($_POST['cID']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Deleted</div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Deleted! </div>';
      }
        break;
    }
}

$cards = selectCard();
include "view-card.php";
include "view-footer.php";
?>
