<h1>Card Info</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>DeckID</th>  
  <th>Deck Name</th>
   <th>Duelist Name</th>  
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
  
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
