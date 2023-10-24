<h1>All Decks With Cards</h1>
  <div class="card-group">
<?php
while ($deck = $decks->fetch_assoc())
//foreach ($decks as $deck) 
{
?>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
  <table class="table">
    <thead>
      <tr>
        <th>Card Number</th>
            <th>Card Name</th>
            <th> Quantity</th>
      </tr>
      
    </thead>
  <tbody>
        <?php
        $cards = selectDecksWithCards($deck['deckID']);
        while ($card = $cards->fetch_assoc()) 
        {
        ?>
         
              <tr>
               <td><?php echo $card['cardnumber']; ?></td>
               <td><?php echo $card['cardname']; ?></td>
             <td><?php echo $card['quantity']; ?></td>
                </tr>
            
            <?php
          
        } 
        ?>
  </tbody>
    
    </div>
  </div>
   
<?php
} 
?>
 </div>
