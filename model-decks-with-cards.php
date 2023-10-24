<?php
function selectDecksWithCards($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.cardID, cardnumber, cardname, attribute, `spell/trap`, level, monstertype, rarity, cardtype, deckID, quantity, carddeckID FROM `card` c JOIN `card/deck` cd ON c.cardID = cd.cardID WHERE deckID = ?");
        $stmt->bind_param("i", $did);
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
function selectDeck() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT `deckID`, `deckname`, `duelistname` FROM `deck`");
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
function insertCard($cID, $dID, $cdQ) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `card/deck` (`cardID`, `deckID`, `quantity`) VALUES (?, ?, ?)");
         $stmt->bind_param("iii", $cID, $dID, $cdQ);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCard($cdID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from card/deck where carddeckID=?");
         $stmt->bind_param("i", $cdID);
      $success =  $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editCard($cdQ, $cdID, $cID, $dID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `card/deck` SET `quantity`=? WHERE `carddeckID`=? AND `cardID`=? AND `deckID`=?");
        $stmt->bind_param("iiii", $cdQ, $cdID, $cID, $dID);  
        $success = $stmt->execute();  
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
