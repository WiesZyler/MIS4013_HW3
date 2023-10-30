<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("util-db.php");
require_once("view/decks-with-cards/model.php");

$PageTitle = "Decks With Cards";
include "view/header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertCard($_POST['cID'], $_POST['dID'], $_POST['cdQ']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Added to Deck! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Added to Deck! </div>';
      }
      break;
      case  "Delete":
      if (deleteCard($_POST['cdID']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Deleted from Deck</div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Deleted from Deck! </div>';
      }
        break;
       case  "Edit":
      if (editCard($_POST['dID'], $_POST['cID'], $_POST['cdQ'], $_POST['cdID']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Quantity Edited! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Quantity Not Edited! </div>';
      }
      break;
    }

}


$decks = selectDeck();
include "view/decks-with-cards/page.php";
include "view/footer.php";
?>
