<?php
function selectDecksWithCards($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardID, cardnumber, cardname, c.packID, attribute, `spell/trap`, level, monstertype, rarity, cardtype d.deckID, deckname, duelistname, packName, quantity FROM `pack` p JOIN `card` c ON p.packID = c.packID JOIN `card/deck` cd ON c.cardID = cd.cardID JOIN `deck` d ON cd.deckID = d.deckID WHERE d.deckID = ?");
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
function selectPack($packID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT packID, packname, packType, releasedate FROM `pack` WHERE packID = ?");
        $stmt->bind_param("s", $packID); 
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
function selectCardsByPack($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardname, cardnumber, cardtype FROM `card` where packID = ?");
        $stmt->bind_param("s", $pid);
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
?>
