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
  <td><?php echo $card['cardname'];?></td>
  <td><?php echo $card['cardtype'];?></td>
  
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
