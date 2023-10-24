<?php
function selectDecksWithCards($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.cardID, cardnumber, cardname, attribute, `spell/trap`, level, monstertype, rarity, cardtype, deckID, quantity FROM `card` c JOIN `card/deck` cd ON c.cardID = cd.cardID WHERE deckID = ?");
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
