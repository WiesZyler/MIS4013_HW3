<?php
function selectDecksWithCards($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardname, cardnumber, cardtype, d.deckID, deckname, duelistname FROM `card` c JOIN `card/deck` cd ON c.cardID = cd.cardID JOIN `deck` d ON cd.deckID = d.deckID WHERE d.deckID = ?");
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
