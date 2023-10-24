<?php
require_once("util-db.php");
require_once("model-deck.php");

$PageTitle = "Decks";
include "view-header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertCard($_POST['deckName'],$_POST['duelistName']))
      {
       echo '<div class="alert alert-success" role="alert"> Deck Added! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Deck Not Added! </div>';
      }
      break;
      case  "Delete":
      if (deleteCard($_POST['dID']))
      {
       echo '<div class="alert alert-success" role="alert"> Deck Deleted</div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Deck Not Deleted! </div>';
      }
        break;
       case  "Edit":
      if (editCard($_POST['deckName'],$_POST['duelistName'],$_POST['dID']))
      {
       echo '<div class="alert alert-success" role="alert"> Deck Edited! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Deck Not Edited! </div>';
      }
      break;
    }

}


$decks = selectDeck();
include "view-deck.php";
include "view-footer.php";
?>
