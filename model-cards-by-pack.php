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
