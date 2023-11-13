<?php
require_once("util-db.php");
require_once("model-card.php");

$cards = selectCard();
$cardData = array();

while ($card = $cards->fetch_assoc()) {
    $cardData[] = $card;
}

header('Content-Type: application/json');

echo json_encode($cardData);
?>
