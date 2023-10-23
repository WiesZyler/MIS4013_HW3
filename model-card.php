<?php
function selectCard() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardID, cardnumber, cardname, packID, attribute, spell/trap, level, monstertype, rarity, cardtype FROM `card` WHERE 1");
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

function insertCard($cNum,$cName,$pID,$cType,$cAtt,$cST,$cLevel,$mType,$cRarity) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `card` (`cardnumber`, `cardname`, `packID`, `cardtype`, `attribute`, `spell/trap`, `level`, `monstertype`, `rarity`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("ssssssiss",$cNum,$cName,$pID,$cType,$cAtt,$cST,$cLevel,$mType,$cRarity);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCard($cID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from card where cardID=?");
         $stmt->bind_param("i", $cID);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editCard($cID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `card` SET `cardnumber`=?, `cardname`=?, `packID`=?, `cardtype`=?, `attribute`=?, `spell/trap`=?, `level`=?, `monstertype`=?, `rarity`=? WHERE `cardID`=?");
         $stmt->bind_param("ssssssissi",$cNum,$cName,$pID,$cType,$cAtt,$cST,$cLevel,$mType,$cRarity,$cID);
      $success =  $stmt->execute();

        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>




