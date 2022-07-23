<?php
session_start();
if (!isset($_SESSION['username']) )
 {
  header("location:login.php");
}


?>

<html>
      <head><title>User</title>

      
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </head>

<style>
.page{
  margin: 10px;
  padding: 10px;
}

</style>

<body>
<?php
include("user_navbar.php");
?>

<     
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <!-- <th scope="col">Addres</th> -->
      <!-- <th scope="col">reference_name</th> -->
      <th scope="col">Ghari Pakage</th>
      <th scope="col">Ghari Item</th>
      <th scope="col">Gahri Total </th>
      <th scope="col">Ghari Status</th>
      

    </tr>
  </thead>
  <?php
include('db.php');

$q="select * from  add_ghari ";

$fetch=mysqli_query($conn,$q) or die("error");
foreach($fetch as $key=>$value)
{

  if($value['user_id'] == $_SESSION["user_id"]){
    // echo $_SESSION["user_id"];
  
?>
  <tbody>
    <tr>
     <td>1</td>
      <td><?php echo $value["name"];?></td>
      <td><?php echo $value["phone_no"];?></td>
      <!-- <td><?php echo $value["addres"];?></td> -->
      <!-- <td><?php echo $value["reference_name"];?></td> -->
      <td><?php echo $value["ghari_pakage"];?></td>
      <td><?php echo $value["ghari_item"];?></td>
      <td>12</td>
      <td><?php echo $value["ghari_status"];?></td>
      
      
    </tr>
 
  
  </tbody>
     <?php
      }
}
?>
 

                       
</table>
            
           
<?php
// include("user_footer.php");
?>





</body>
    </html>



    ================================================this code is orignal show a data code================


    <?php
session_start();
if (!isset($_SESSION['username']) )
 {
  header("location:login.php");
}


?>

<html>
      <head><title>User</title>



<style>
.page{
  margin: 10px;
  padding: 10px;
}

</style>

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
     
      <th scope="col">Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Ghari Pakage</th>
      <th scope="col">Ghari Item</th>
      <th scope="col">Gahri Total </th>
      <th scope="col">Ghari Status</th>
    
    </tr>
  </thead>
  <?php while($row=mysqli_fetch_assoc($res))
  {
    if($row['user_id'] == $_SESSION["user_id"]){
    ?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['phone_no']?></td>
				<td><?php echo $row['ghari_pakage']?></td>
				<td><?php echo $row['ghari_item']?></td>
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
</body>
    </html>






       <!-- <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
                  
                    <div class="form-outline">
                      <input type="text" id="referno" class="form-control form-control-lg" name="reference_name"  />
                      <label class="form-label" for="referno">Reference Name </label>
                    </div>
                  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
                  </div>
                  </div> -->
               <!-- 
                  <div class="row">
                    <div class="col-12">
                  
                      <select class="select form-control-lg" name="ghari_pakage">
                        <option value="" disabled>Ghari Pakage</option>
                        <option value="250 g">250 g</option>
                        <option value="500 g">500 g</option>
                        <option value="1 kg">1 kg</option>
                      </select><br>
                      <label class="form-label select-label">Ghari Pakage</label>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">
                    <div class="col-12">
                      <select class="select form-control-lg" name="ghari_item">
                        <option value="" disabled>Ghari item</option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select><br>
                      <label class="form-label select-label">Ghari Item</label>
                    </div>
                  </div>
                   <div class="col-md-6 mb-4"> -->
               <!-- 
                  <br> -->
               <!-- <div class="row">
                  <div class="col-20">
                  <label class="form-label select-label">Status</label> 
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="ghari_status"
                      value="Pending"
                    />
                    Pending
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="ghari_status"
                      value="Deliver"
                    />
                    Deliver
                  </div>
                  
                  
                  
                  </div> -->








                  ===========================================================================================================================================
                  all code are a addghari page......

                  <?php
 session_start();
?>
<html>
   <head>
      <title>Add Ghari</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </head>
<?php
   $status=false;
 
   if (!isset($_SESSION['username']) )
    {
     header("location:login.php",$_SESSION["user_id"]);
   }
   // echo $_SESSION['user_id'];
   // exit;
   include('db.php');
   if(isset($_POST['ok']))
   {
     $name=$_POST['name'];
     $phone_no=$_POST['phone_no'];
     $addres=$_POST['addres'];
     // $reference_name=$_POST['reference_name'];
     // $ghari_pakage=$_POST['ghari_pakage'];
     // $ghari_item=$_POST['ghari_item'];
     $ghari_status=$_POST['ghari_status'];
     $user_id=$_SESSION["user_id"];
     date_default_timezone_set('Asia/Kolkata');
     $date_time=date("Y-m-d h:i:sa");
     $reference_name = $_SESSION['username'];  
     $_2pc=$_POST['2pc'];
     $_250g=$_POST['250g'];
     $_500g=$_POST['500g'];
     $_1kg=$_POST['1kg'];
     $_2kg=$_POST['2kg'];
    
     
  
     
       
   $query="insert into add_ghari(`name`,`phone_no`,`addres`,`ghari_status`,`user_id`,`reference_name`,`2pc`,`250g`,`500g`,`1kg`,`2kg`)
    values('".$name."','".$phone_no."','".$addres."','".$ghari_status."','".$user_id."','".$reference_name."','".$_2pc."','".$_250g."','".$_500g."'
    ,'".$_1kg."','".$_2kg."')";
   
   
   // echo "$query";
   // exit();
   
     
      try{
        mysqli_query($conn,$query) or die("error");
       
        //  echo "hello bro Done";
   
      }
    
    catch(Exception $e) {
     // echo 'Message: ' .$e->getMessage();
   }
   }
   ?>

   <body>
      <?php
         include("user_navbar.php");
         
         ?>
      <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
         <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Ghari</h3>
            <form class="user" method="POST" action="" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-md-6 mb-4">
                     <div class="form-outline">
                      <label class="form-label" for="firstName">Name</label>
                        <input type="text" id="tName" class="form-control form-control-lg" name="name" required  />
                        
                     </div>
                  </div>
                  <div class="col-md-6 mb-4">
                     <div class="form-outline">
                     <label class="form-label" >Phone Number</label>
                        <input type="text" id="mobile no" class="form-control form-control-lg"  name="phone_no" />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label  class="form-label">Adress</label>
                        <textarea name="addres" id="w3review"  rows="4" cols="70" ></textarea>
                       
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label class="form-label" >2 Pc</label>
                     <input type="text" id="2pc" class="form-control form-control-lg"  name="2pc" />
                     
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label class="form-label" >250g</label>
                     <input type="text" id="250g" class="form-control form-control-lg"  name="250g" />
                     
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label class="form-label" >500g</label>
                     <input type="text" id="500g" class="form-control form-control-lg"  name="500g" />
                     
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label class="form-label" >1 KG</label>
                     <input type="text" id="1kg" class="form-control form-control-lg"  name="1kg" />
                     
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
                     <div class="form-outline datepicker w-100">
                     <label class="form-label" >2 KG</label>
                     <input type="text" id="2kg" class="form-control form-control-lg"  name="2kg" />
                     
                     </div>
                  </div>
               </div>
              
                    <div class="row">
                       <div class="col-20">
                          <label class="form-label select-label">Status</label> 
                             <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="ghari_status"
                                  value="Pending"
                                  />
                              Pending
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                  class="form-check-input"
                                  type="radio"
                                  name="ghari_status"
                                  value="Deliver"
                                  />
                              Deliver
                            </div>
                  
                  
                  
                  </div> 
      

   
         </div>
      </div>
      <div class="mt-4 pt-2">
      <!-- <input class="btn btn-primary btn-lg" type="submit" value="Submit" /> -->
      <button type="submit" name="ok" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalLabel">Submit</button>
      </div>
      <!-- Modal -->
      <?php
         if($status==true){
         
         
         ?>
     
     
      <?php
         }
         
         ?>
      </form>

 