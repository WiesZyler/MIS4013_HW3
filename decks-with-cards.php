<?php
require_once("util-db.php");
require_once("model-decks-with-cards.php");

$PageTitle = "Decks With Cards";
include "view-header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertCard($_POST['cdID'], $_POST['cID'], $_POST['dID'], $_POST['quantity']))
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
      if (editCard($_POST['quantity'], $_POST['cdID'], $_POST['cID'], $_POST['dID']))
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
include "view-decks-with-cards.php";
include "view-footer.php";
?>
