<h1>All Decks With Cards</h1>
<div class="card-group">
<?php
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
          

          if ($pack) {
         
            $packData = $pack->fetch_assoc();
            ?>
            <li class="list-group-item">
              <?php echo $card['cardnumber']; ?> - <?php echo $card['cardname']; ?> - <?php echo $card['cardtype']; ?> - <?php echo $packData['packname']; ?>
            </li>
            <?php
          }
        } 
        ?>
      </ul>
    </div>
  </div>
<?php
} 
?>
</div>
