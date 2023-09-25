<h1>Pack Info</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>PackID</th>  
  <th>Pack Name</th>
        <th>Pack Type</th>
   <th>Release Date</th>  
      <th></th>
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
   <td><?php echo $pack['packType'];?></td>
  <td><?php echo $pack['releasedate'];?></td>
<td><a href="cards-by-pack.php?id=<?php echo $pack['packID'];?>">Cards</a></td>
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
