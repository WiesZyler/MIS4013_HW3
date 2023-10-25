<select class="form-select" id="did" name="did">
  <?php
while ($deckItem = $deckList->fetch_assoc()){
  $selText ="";
  if (selectedDeck == $deckItem['deckID'])
  {
    $selText = "Selected";
  }
  ?>
<option value="<?php echo $deckItem['deckID'];?>"<?-$selText?>> <?php echo $deckItem['duelistname']; ?>'s <?php echo $deckItem['deckname']; ?> Deck</option>

  <?php
}
?>
  
</select>
