<?php
function selectCard() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT cardnumber, cardname, packID, cardtype FROM `card` WHERE 1");
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
function insertCard() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `card` (`cardID`, `cardnumber`, `cardname`, `packID`, `cardtype`, `attribute`, `spell/trap`, `level`, `monstertype`, `rarity`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("issssssiss",$cID,$cNum,$cName,$pID,$cType,$cAtt,$cST,$cLevel,$mType,$cRarity);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
