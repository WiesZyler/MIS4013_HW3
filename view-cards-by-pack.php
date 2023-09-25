<h1>Cards By Pack</h1>
<h2><?php echo $pack['packname'] . ' (' . $pack['packID'] . ') ' . $pack['releasedate']; ?></h2>

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
 
  <td><?php echo $pack['cardname'];?></td>
  <td><?php echo $pack['cardnumber'];?></td>
   <td><?php echo $pack['cardtype'];?></td>
  
</tr>


      <?php
}


?>
    </tbody>
  </table>
</div>
