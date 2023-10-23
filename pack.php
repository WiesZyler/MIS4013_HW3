<?php
require_once("util-db.php");
require_once("model-pack.php");

$PageTitle = "Packs";
include "view-header.php";

$packs = selectPack();
include "view-pack.php";
include "view-footer.php";
?>

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
       case  "Edit":
      if (editCard($_POST['cID'],$_POST['cNum'],$_POST['cName'],$_POST['pID'],$_POST['cType'],$_POST['cAtt'],$_POST['cST'],$_POST['cLevel'],$_POST['mType'],$_POST['cRarity']))
      {
       echo '<div class="alert alert-success" role="alert"> Card Edited! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Card Not Edit! </div>';
      }
      break;
    }

}

