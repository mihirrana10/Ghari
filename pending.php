<?php
session_start();
if (!isset($_SESSION['username']) )
 {
  header("location:login.php");
}

?>


<html>
      <head><title>Surat Ghari</title>
      <?php include_once("header.php"); ?>

</head>
<body>

    


<?php
include("admin_navbar.php");
?>
<?php
$con=mysqli_connect('localhost','root','','new_project');
$res=mysqli_query($con,"select * from add_ghari");


?>

<table class="table table">
  <thead class="thead-dark">
    <tr>
    
      

     <th scope="col">Oder ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Reference Name</th>
      <th scope="col">Ghari Pakage</th>
      <th scope="col">Ghari Item</th>
      <th scope="col">Gahri Total </th>
      <th scope="col">Ghari Status</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($res))
  {
    if($row['ghari_status']=='Pending') 
      {
    ?>
			<tr>
        <td>GHARI<?php echo $row['Id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['phone_no']?></td>
        <td><?php echo $_SESSION['username'];?></td>
				<td><?php echo $row['ghari_pakage']?></td>
				<td><?php echo $row['ghari_item']?></td>
        <td>1</td>
				<td><?php echo $row['ghari_status']?></td>
        <td>
        <!-- <button type="button" class="btn btn-success">Done</button> -->
      <!-- <a href="deleteghari.php?Id=<?php echo $row['Id']?>"  class="btn btn-success">Done</a> -->
        <!-- <button type="button" class="btn btn-primary">Edit</button> -->
        <a href="updateghari.php?Id=<?php echo $row['Id']?>"  class="btn btn-primary">Edit</a>
        <!-- <button type="button" class="btn btn-danger">Delete</button> -->
        <a href="deleteghari.php?Id=<?php echo $row['Id']?>"  class="btn btn-danger">Delete</a>   
        </td>
			</tr>
			<?php 
          } 
    }
      ?>
     
  
</table>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
} );

</script>
</body>
    </html>
    
   