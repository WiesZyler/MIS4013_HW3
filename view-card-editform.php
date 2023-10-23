

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editCardModal<?php echo $card['cardID'];?>">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editCardModal<?php echo $card['cardID'];?>" tabindex="-1" aria-labelledby="editCardModalLabel<?php echo $card['cardID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCardModalLabel<?php echo $card['cardID'];?>">Edit a Card</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                  <form method="post" action="">


                   
                    <div class="mb-3">
                      <label for="cNum<?php echo $card['cardID'];?>" class="form-label">Card Number</label>
                      <input type="text" class="form-control" id="cNum<?php echo $card['cardID'];?>" name="cNum" value="<?php echo $card['cardnumber'];?>">
                    </div>
                    
                    <div class="mb-3">
                      <label for="cName<?php echo $card['cardID'];?>" class="form-label">Card Name</label>
                      <input type="text" class="form-control" id="cName<?php echo $card['cardID'];?>" name="cName" value="<?php echo $card['cardname'];?>">
                    </div>
                  
                    <div class="mb-3">
                      <label for="pID<?php echo $card['cardID'];?>" class="form-label">Pack ID</label>
                      <input type="text" class="form-control" id="pID<?php echo $card['cardID'];?>" name="pID" value="<?php echo $card['packID'];?>"> 
                    </div>

                    <div class="mb-3">
                      <label for="cType<?php echo $card['cardID'];?>" class="form-label">Card Type</label>
                      <input type="text" class="form-control" id="cType<?php echo $card['cardID'];?>" name="cType" value="<?php echo $card['cardtype'];?>">
                    </div>
                    
                    <div class="mb-3">
                      <label for="cAtt<?php echo $card['cardID'];?>" class="form-label">Attribute</label>
                      <input type="text" class="form-control" id="cAtt<?php echo $card['cardID'];?>"  name="cAtt" value="<?php echo $card['attribute'];?>">
                    </div>

                     <div class="mb-3">
                      <label for="cST<?php echo $card['cardID'];?>" class="form-label">Spell/Trap</label>
                      <input type="text" class="form-control" id="cST<?php echo $card['cardID'];?>"  name="cST" value="<?php echo $card['spell/trap'];?>">
                    </div>

                     <div class="mb-3">
                      <label for="cLevel<?php echo $card['cardID'];?>" class="form-label">Level</label>
                      <input type="text" class="form-control" id="cLevel<?php echo $card['cardID'];?>"  name="cLevel" value="<?php echo $card['level'];?>">
                    </div>

                    <div class="mb-3">
                      <label for="mType<?php echo $card['cardID'];?>" class="form-label">Monster Type</label>
                      <input type="text" class="form-control" id="mType<?php echo $card['cardID'];?>"  name="mType" value="<?php echo $card['monstertype'];?>">
                    </div>

                    <div class="mb-3">
                      <label for="cRarity<?php echo $card['cardID'];?>" class="form-label">Rarity</label>
                      <input type="text" class="form-control" id="cRarity<?php echo $card['cardID'];?>"  name="cRarity" value="<?php echo $card['rarity'];?>">
                    </div>
                 <input type="hidden" name="cID" value="<?php echo $card['cardID'];?>">
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

        
      </div>
    </div>
  </div>
</div>
