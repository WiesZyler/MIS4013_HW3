<?php
require_once("util-db.php");
require_once("model-card.php");

$PageTitle = "Cards";
include "view-header.php";
var_dump($next_cID);
if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertCard($_POST['cID'],$_POST['cNum'],$_POST['cName'],$_POST['pID'],$_POST['cType'],$_POST['cAtt'],$_POST['cST'],$_POST['cLevel'],$_POST['mType'],$_POST['cRarity']))
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
