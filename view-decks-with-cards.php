<h1>All Decks With Cards</h1>
<div class="card-group">
<?php
foreach ($decks as $deck) {
?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
      <ul class="list-group list-group-flush">
  <table class="table">
    <thead>
      <th>Card Number</th>
            <th>Card Name</th>
            <th> Quantity</th>
    </thead>
  <tbody>
        <?php
        $cards = selectDecksWithCards($deck['deckID']);
        while ($card = $cards->fetch_assoc()) {
        ?>
         
    
               <td><?php echo $card['cardnumber']; ?></td>
               <td><?php echo $card['cardname']; ?></td>
             <td><?php echo $card['quantity']; ?></td>
            </li>
            <?php
          
        } 
        ?>
  </tbody>
      </ul>
    </div>
  </div>
<?php
} 
?>
</div>
