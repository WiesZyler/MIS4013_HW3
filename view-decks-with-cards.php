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

 <?php
  $pack = selectPack($deck['packID']
while($pack = $packs->fetch_assoc())
{
?>

  <td><?php echo $pack['packname'];?></td>
</tr>


     

<?php
}
}
?>
    </tbody>
  </table>
</div>
