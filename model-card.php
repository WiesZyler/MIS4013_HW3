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
        $stmt = $conn->prepare("INSERT INTO `card` (`cardnumber`, `cardname`, `packID`, `cardtype`, `attribute`, `spell/trap`, `level`, `monstertype`, `rarity`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("ssssssiss",$cNum,$cName,$pID,$cType,$cAtt,$cST,$cLevel,$mType,$cRarity);
        $stmt->execute();
        echo "SQL Query: " . $stmt->sql;
        echo "Affected Rows: " . $stmt->affected_rows;
        $success = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>



