<span>
<h1>Card Info</h1>
<form method="post" action="decks-with-cards.php">
      <input type="hidden" name="did" value="<?php echo $deck['*'];?>">
  <button type="submit" class="Cards">All Cards for each Deck</button>
</span>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>DeckID</th>  
  <th>Deck Name</th>
   <th>Duelist Name</th>  
        <th></th>
      </tr>
      
    </thead>
    <tbody>
      <?php
while($deck = $decks->fetch_assoc())
{
?>
<tr>
  <td><?php echo $deck['deckID'];?></td>
  <td><?php echo $deck['deckname'];?></td>
  <td><?php echo $deck['duelistname'];?></td>
  <td>
    
</form>
  </td>
  
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
