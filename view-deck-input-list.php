<select class="form-select" id="did" name="did">
  <?php
while ($deckItem = $deckList->fetch_assoc()){
  ?>
<option value="<?php echo $deckItem['deckID'];?>"><?php echo $deckItem['duelistname']; ?>'s <?php echo $deckItem['deckname']; ?> Deck</option>

  <?php
}
?>
  
</select>
