<h1>Cards By Instructor</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      
      <tr>
        <th>PackID</th>  
        <th>Pack Name</th>
        <th>Pack Type</th>
        <th>Release Date</th>  
        <th>Card Name</th>  
        <th>Card Number</th>
        <th>Card Type</th>
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
  <td><?php echo $pack['cardID'];?></td>
  <td><?php echo $pack['cardname'];?></td>
   <td><?php echo $pack['cardType'];?></td>
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
