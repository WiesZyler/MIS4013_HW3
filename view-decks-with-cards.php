<h1>Decks With Cards</h1>
<?php
while ($deck = $decks->fetch_assoc()) {
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $deck['duelistname']; ?>'s <?php echo $deck['deckname']; ?> Deck</h5>
    <p class="card-text">
      <?php
      $packs = selectCardsByPack($deck['packID']);
      while ($pack = $packs->fetch_assoc()) {
      ?>
        <table class="table">
          <thead>
            <tr>
              <th><h4><?php echo $pack['packname']; ?></h4></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cards = selectCardsByPack($pack['packID']);
            while ($card = $cards->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $card['cardnumber']; ?> - <?php echo $card['cardname']; ?> - <?php echo $card['cardtype']; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      <?php
      } 
      ?>
    </p>
  </div>
</div>
<?php
} 
?>
