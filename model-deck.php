<?php
function selectDeck() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `deckID`, `deckname`, `duelistname` FROM `deck` WHERE 1;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function insertDeck($deckName,$duelistName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `deck` (`deckname`, `duelistname`) VALUES (?, ?)");
         $stmt->bind_param("ss",$deckName,$duelistName);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCard($dID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from deck where deckID=?");
         $stmt->bind_param("i", $dID);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editCard($deckName,$duelistName,$dID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `deck` SET `deckname`=?, `duelistname`=? WHERE `deckID`=?");
        $stmt->bind_param("ssi",$deckName,$duelistName,$dID);  
        $success = $stmt->execute();  
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>
