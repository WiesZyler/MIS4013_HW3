<div class="row">
  <div class="col">
    
  </div>
    <div class="col-auto">
    
  </div>
</div>
<h1>Card Info</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>PackID</th>  
  <th>Card Number</th>
   <th>Card Name</th>  
        <th>Card Type</th> 
      </tr>
      
    </thead>
    <tbody>
      <?php
while($card = $cards->fetch_assoc())
{
?>
<tr>
  <td><?php echo $card['packID'];?></td>
  <td><?php echo $card['cardnumber'];?></td>
  <td><a href = "https://www.tcgplayer.com/search/all/product?q=<?php echo $card['cardname'];?>" target = "_blank"><?php echo $card['cardname'];?></td></a>
  <td><?php echo $card['cardtype'];?></td>

 
  
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
