

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newCardModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newCardModal" tabindex="-1" aria-labelledby="newCardModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCardModalLabel">Add a Card to a Deck</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                  <form method="post" action="">

<?php 
$deckList = selectDecksForInput();
include "view-deck-input.php"
?>
                   
                    <div class="mb-3">
                      <label for="dID" class="form-label">Deck ID</label>
                      <input type="text" class="form-control" id="dID" name="dID">
                    </div>
                    
                    <div class="mb-3">
                      <label for="cID" class="form-label">Card ID </label>
                      <input type="text" class="form-control" id="cID" name="cID">
                    </div>
                  
                    <div class="mb-3">
                      <label for="cdQ" class="form-label">Quantity</label>
                      <input type="text" class="form-control" id="cdQ" name="cdQ">
                    </div>

                   
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

        
      </div>
    </div>
  </div>
</div>
