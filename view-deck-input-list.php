<select class="form-select" id="did" name="did">
  <?php
while ($deckItem = $deckList->fetch_assoc()){
  ?>
<option value="<?php echo $deckItem['deckID'];?>"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</option>

  <?php
}
?>
  
</select>
