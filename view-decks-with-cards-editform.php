


<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editCardModal<?php echo $card['deckID'];?>">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editCardModal<?php echo $card['deckID'];?>" tabindex="-1" aria-labelledby="editCardModalLabel<?php echo $card['deckID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCardModalLabel<?php echo $card['deckID'];?>">Edit Quantity</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



                   <div class="mb-3">
                      <label for="dID<?php echo $card['cardID'];?>" class="form-label">Deck</label>
                      <?php 
                      $deckList = selectDecksforInput();
                      $selectedDeck = $card['deckID'];
                      include "view-deck-input-list.php"
                      ?>  
                    </div>
                    
                    <div class="mb-3">
                      <label for="cID<?php echo $card['cardID'];?>" class="form-label">Card ID </label>
                      <input type="text" class="form-control" id="cID<?php echo $card['cardID'];?>" name="cID" value="<?php echo $card['cardID'];?>">
                    </div>
       
                  <form method="post" action="">         
                    <div class="mb-3">
                      <label for="cdQ<?php echo $card['cardID'];?>" class="form-label">Quantity</label>
                      <input type="text" class="form-control" id="cdQ<?php echo $card['cardID'];?>"  name="cdQ" value="<?php echo $card['quantity'];?>">
                    </div>

                   
                    
                   <input type="hidden" name="cdID" value="<?php echo $card['carddeckID'];?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

        
      </div>
    </div>
  </div>
</div>
