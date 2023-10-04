<?php
function selectDecksWithCards($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardname, cardnumber, cardtype, d.deckID, deckname, duelistname, packID FROM `card` c JOIN `card/deck` cd ON c.cardID = cd.cardID JOIN `deck` d ON cd.deckID = d.deckID WHERE d.deckID = ?");
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
function selectCardsByPack($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT P.packID, packname, packType, releasedate, cardname, cardnumber, cardtype FROM `pack` P JOIN `card` C on P.packID = C.packID where P.packID = ?");
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
