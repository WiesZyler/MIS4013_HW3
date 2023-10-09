<h1>Decks With Cards</h1>
<?php if($deck = $decks->fetch_assoc())
{?>

 <?php
while($deck = $decks->fetch_assoc())
{
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $deck['duelistname'];?>'s <?php echo $deck['deckname'];?> Deck</h5>
    <p class="card-text">
     <?php
  $packs = selectCardsByPack($deck['packID']);
 While($pack = $packs->fetch_assoc())
{
?>
     <table class="table">
    <thead>      
      <tr>
        <th><?php echo $pack['packname'] . ' ';?></th>  
       </tr>
    </thead>
    <tbody>
   <div class="card" style="width: 18rem;">
    
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $deck['cardnumber'];?> - <?php echo $deck['cardname'];?> - <?php echo $deck['cardtype'];?></li>



   
  </ul>
</div>
  </p>
  </div>
</div>







