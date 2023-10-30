<div class="row">
  <div class="col">
<h1>Decks With Cards</h1>
  </div>
  <div class="col-auto">
<?php
include "new-form.php";
?>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4" style="margin-left:10px;">
<?php
while ($deck = $decks->fetch_assoc()) {
  include "deck.php";

}
?>
  </div>
</div>
