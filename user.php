
<?php

session_start();
if (!isset($_SESSION['username']) )
 {
  header("location:login.php");
}

?>
<html>
  <?php include_once("header.php"); ?>
      <!-- <head><title>User</title>
<style>
.page{
  margin: 10px;
  padding: 10px;
}

</style> -->

<body>
<?php
         include("user_navbar.php");
         
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
      <!-- <th scope="col">Ghari Pakage</th> -->
      <th scope="col">Ghari Item</th>
      <th scope="col">Ghari Total </th>
      <th scope="col">Ghari Status</th>
    
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($res))
  {
    if($row['user_id'] == $_SESSION["user_id"]){
    ?>
			<tr>
        <td><?php echo $row['uid']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['phone_no']?></td>
				<!-- <td><?php echo $row['ghari_pakage']?></td> -->

      
				<td>
        
        2 Pc:   <?php echo $row['g2pc']?><br>
        250g:   <?php echo $row['g250g']?><br>
        500g:   <?php echo $row['g500g']?><br>
        1 KG:   <?php echo $row['g1kg']?><br>
        2 KG:   <?php echo $row['g2kg']?><br>
      </td>
        <td>1</td>
				<td><?php echo $row['ghari_status']?></td>
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

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
//  $('.input-daterange').datepicker({
//   todayBtn:'linked',
//   format: "yyyy-mm-dd",
//   autoclose: true
//  });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fethchdata.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
</body>
    </html>