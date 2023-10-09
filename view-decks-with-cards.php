<h1>Decks With Cards</h1>
<?php if($deck = $decks->fetch_assoc())
{?>
<h2><?php echo $deck['duelistname'];?>'s <?php echo $deck['deckname'];?> Deck</h2>
 <?php
} 
?>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>Card Name</th>  
        <th>Card Number</th>
        <th>Card Type</th>
       <th>Pack Name</th>
      </tr>
      
    </thead>
    <tbody>
     <?php

while($deck = $decks->fetch_assoc())
{
?>
<tr>
 
  <td><?php echo $deck['cardname'];?></td>
  <td><?php echo $deck['cardnumber'];?></td>
   <td><?php echo $deck['cardtype'];?></td>
 <td>
 <?php
  $packs = selectCardsByPack($deck['packID']);
if($pack = $packs->fetch_assoc())
{
?>

  <?php echo $pack['packname'] . ' ';?>
<?php
}
 ?>
 </td>
</tr>


     

<?php
}
?>
    </tbody>
  </table>
</div>

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
    <li class="list-group-item">An item</li>



   
  </ul>
</div>
  </p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>







