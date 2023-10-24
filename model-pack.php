<?php
function selectPack() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT packID, packname, packType, releasedate FROM `pack` WHERE 1");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

<?php

function insertPack($pID,$pName,$pType,$rDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `pack` (`packID`, `packname`, `packType`, `releasedate`) VALUES (?, ?, ?, ?)");
         $stmt->bind_param("ssss",$pID,$pName,$pType,$rDate);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePack($pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from pack where cardID=?");
         $stmt->bind_param("s", $pID);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editPack($pName,$pType,$rDate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `pack` SET `packname`=?, `packType`=?, `releasedate`=? WHERE `packID`=?");
         $stmt->bind_param("ssss",$pName,$pType,$rDate,$pID);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
