
<h1>All Decks With Cards</h1>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
foreach ($decks as $deck) {
?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
      <ul class="list-group list-group-flush">
        <?php

        $cards = selectDecksWithCards($deck['deckID']);
        while ($card = $cards->fetch_assoc()) {
        
          $pack = selectPack($card['packID']);
          var_dump($pack);
        ?>
          <li class="list-group-item">
            <?php echo $card['cardnumber']; ?> - <?php echo $card['cardname']; ?> - <?php echo $card['cardtype']; ?> - <?php echo $pack['packName']; ?>
          </li>
        <?php
        } 
        ?>
      </ul>
    </div>
  </div>
<?php
} 
?>
