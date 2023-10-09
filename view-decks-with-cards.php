<h1>All Decks With Cards</h1>
<?php
foreach ($decks as $deck) {
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
 <ul class="list-group list-group-flush">
    
         
            <?php
          
         
            while ($card = $cards->fetch_assoc()) {
            ?>
             
            <li class="list-group-item">  <?php echo $card['cardnumber']; ?> - <?php echo $card['cardname']; ?> - <?php echo $card['cardtype']; ?> </li>
            
            <?php
            }
            ?>

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>


          
      <?php
      } 
      ?>
    </p>
  </div>
</div>
<?php
} 
?>
