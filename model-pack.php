<?php
function selectPack() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT packID, packname, releasedate FROM `pack` WHERE 1");
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
