<?php
require_once("util-db.php");
require_once("model-pack.php");

$PageTitle = "Packs";
include "view/header.php";

if (isset($_POST['actionType']))
{
  switch ($_POST['actionType'])
    {
      case  "Add":
      if (insertPack($_POST['pID'],$_POST['pName'],$_POST['pType'],$_POST['rDate']))
      {
       echo '<div class="alert alert-success" role="alert"> Pack Added! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Pack Not Added! </div>';
      }
      break;
      case  "Delete":
      if (deletePack($_POST['pID']))
      {
       echo '<div class="alert alert-success" role="alert"> Pack Deleted</div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Pack Not Deleted! </div>';
      }
        break;
       case  "Edit":
      if (editPack($_POST['pName'],$_POST['pType'],$_POST['rDate'],$_POST['pID']))
      {
       echo '<div class="alert alert-success" role="alert"> Pack Edited! </div>';
          }
      else
      {
        echo '<div class="alert alert-danger" role="alert"> Error! Pack Not Edited! </div>';
      }
      break;
    }

}

  $packs = selectPack();
include "view-pack.php";
include "view/footer.php";

?>

