<h1>All Decks With Cards</h1>
<div class="card-group">
<?php
while ($deck = $decks->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
      <p class="card-text">
      <ul class="list-group">
<?php
$cards = selectDecksWithCards($deck['deckID']);
  while ($card = $cards->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $card['cardnumber']; ?> - <?php echo $card['cardname']; ?>  -<?php echo $card['quantity']; ?></li>
<?php
  }
?>
      </ul>
      </p>
      
    </div>
  </div>
<?php
}
?>
</div>
