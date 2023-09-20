<h1>Card Info</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>PackID</th>  
  <th>Pack Name</th>
   <th>Release Date</th>  
      
      </tr>
      
    </thead>
    <tbody>
      <?php
while($card = $cards->fetch_assoc())
{
?>
<tr>
  <td><?php echo $card['packID'];?></td>
  <td><?php echo $card['packname'];?></td>
  <td><?php echo $card['releasedate'];?></td>

  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
