<?php
foreach ($decks as $deck) {
    echo '<div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">' . $deck['duelistname'] . "'s " . $deck['deckname'] . ' Deck</h5>
              <ul class="list-group list-group-flush>';

    $cards = selectDecksWithCards($deck['deckID']);
    while ($card = $cards->fetch_assoc()) {
        
        echo '<li class="list-group-item">' . $card['cardnumber'] . ' - ' . $card['cardname'] . ' - ' . $card['cardtype'] . ' - ' . 
            if($pack = $packs->fetch_assoc())
{
$pack['packName'] . '</li>';
    }
    }

    echo '</ul>
        </div>
      </div>';
}
?>
