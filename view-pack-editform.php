

<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newPackModal<?php echo $pack['packID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPackModal<?php echo $pack['packID'];?>" tabindex="-1" aria-labelledby="newPackModalLabel<?php echo $pack['packID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newPackModalLabel<?php echo $pack['packID'];?>">Edit a Pack</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                  <form method="post" action="">

                    <div class="mb-3">
                      <label for="pName<?php echo $pack['packID'];?>" class="form-label">Pack Name</label>
                      <input type="text" class="form-control" id="pName<?php echo $pack['packID'];?>" name="pName" value="<?php echo $pack['packname'];?>">
                    </div>
                    
                    <div class="mb-3">
                      <label for="pType<?php echo $pack['packID'];?>" class="form-label">Pack Type</label>
                      <input type="text" class="form-control" id="pType<?php echo $pack['packID'];?>" name="pType" value="<?php echo $pack['packType'];?>>
                    </div>

                    <div class="mb-3">
                      <label for="rDate<?php echo $pack['packID'];?>" class="form-label">Release Date</label>
                      <input type="text" class="form-control" id="rDate<?php echo $pack['packID'];?>" name="rDate" value="<?php echo $pack['releasedate'];?>>
                    </div>
                    
                 
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

        
      </div>
    </div>
  </div>
</div>
