<select class="form-select" id="did" name="did">
  <?php
while ($deckItem = $deckList->fetch->fetch_assoc()){
  ?>
<option value="<?php echo deckItem['deckID'];?>"><?php echo deckItem['deckName'];?></option>

  <?php
}
?>
  
</select>
