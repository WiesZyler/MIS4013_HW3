
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
      <p class="card-text">
      <ul class="list-group">
<?php
$cards = selectDecksWithCards($deck['deckID']);
  while ($card = $cards->fetch_assoc()) {
    include "card.php"

  }
?>
      </ul>
      </p>
      
    </div>
  </div>
