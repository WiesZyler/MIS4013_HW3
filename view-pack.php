<h1>Pack Info</h1>
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
while($pack = $packs->fetch_assoc())
{
?>
<tr>
  <td><?php echo $pack['packID'];?></td>
  <td><?php echo $pack['packname'];?></td>
  <td><?php echo $pack['releasedate'];?></td>

  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
