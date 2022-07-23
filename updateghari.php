<?php
include('db.php');

$Id = $_GET['Id']; 

$sql= mysqli_query($conn,"SELECT * from add_ghari where Id='".$Id."'"); // select query 

// echo $sql;
// exit();


$fetch = mysqli_fetch_array($sql); // fetch data

    if(isset($_POST['ok']))
    {
    $Id =$_POST['Id'];   
    $name=$_POST['name'];
    $phone_no=$_POST['phone_no'];
    $addres=$_POST['addres'];
    $reference_name=$_POST['reference_name'];
    $ghari_pakage=$_POST['ghari_pakage'];
    $ghari_item=$_POST['ghari_item'];
    $ghari_status=$_POST['ghari_status'];


             
    $sql = "update add_ghari set Id='".$Id."',name='".$name."',phone_no='".$phone_no."',addres='".$addres."',reference_name='".$reference_name."' 
    ,ghari_pakage='".$ghari_pakage."',ghari_item='".$ghari_item."',ghari_status='".$ghari_status."' WHERE Id='".$Id."';";
   
    if ($conn->query($sql) === TRUE) {
         $message = "Record update successfully";
    echo "<script>alert('$message');</script>";
        //echo "<br>Record update successfully";
    }  else {
         $message1 = " Error update record:";
    echo "<script>alert('$message1');</script>";
        //echo "<br>Error update record: " . $conn->error;
}
}
?>
<html>
      <head><title>Update Ghari</title>
      
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </head>
<body>
<?php
include("admin_navbar.php");
?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Ghari</h3>
            <form class="user" method="POST" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-4">
                <div class="col-sm-6 mb-3 mb-sm-0">

                                   
<input type="hidden" class="form-control form-control-user" id="examplecat_name"name="Id"
value="<?php echo $fetch['Id'] ?>" >
</div>
                  <div class="form-outline">
                    <input type="text" id="tName" class="form-control form-control-lg" name="name" required value="<?php echo $fetch['name'] ?>" />
                    <label class="form-label" for="firstName">Name</label>
                  </div>
                
                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="mobile no" class="form-control form-control-lg"  name="phone_no" value="<?php echo $fetch['phone_no'] ?>" />
                    <label class="form-label" >Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <textarea name="addres" id="w3review"  rows="4" cols="70"  ><?php echo $fetch['addres']; ?></textarea>
                    <label  class="form-label">Adress</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="referno" class="form-control form-control-lg" name="reference_name"  value="<?php echo $fetch['reference_name']; ?>" />
                    <label class="form-label" for="referno">Reference Name </label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="ghari_pakage">
                    <option value="" disabled>Ghari Pakage</option>
                    <option value="250 g" <?php if($fetch["ghari_pakage"]=='250 g'){
                        echo "selected";
                      }
                      ?> >250 g</option>
                    <option value="500 g"<?php if($fetch["ghari_pakage"]=='500 g'){
                        echo "selected";
                      }
                      ?>>500 g</option>
                    <option value="1 kg" <?php if($fetch["ghari_pakage"]=='1 kg'){
                        echo "selected";
                      }
                      ?>>1 kg</option>
                  </select><br>
                  <label class="form-label select-label">Ghari Pakage</label>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col-12">
                  <select class="select form-control-lg" name="ghari_item">
                  
                    <option value="" disabled>Ghari item</option> 
                    
                    <option value="1"  <?php if($fetch["ghari_item"]=='1'){
                        echo "selected";
                      }
                      ?>>1</option>
                    <option value="2"<?php if($fetch["ghari_item"]=='2'){
                        echo "selected";
                      }
                      ?>>2</option>
                    <option value="3"<?php if($fetch["ghari_item"]=='3'){
                        echo "selected";
                      }
                      ?>>3</option>
                    <option value="4"<?php if($fetch["ghari_item"]=='4'){
                        echo "selected";
                      }
                      ?>>4</option>
                    <option value="5"<?php if($fetch["ghari_item"]=='5'){
                        echo "selected";
                      }
                      ?>>5</option>
                    <option value="6"<?php if($fetch["ghari_item"]=='6'){
                        echo "selected";
                      }
                      ?>>6</option>
                    
                  </select><br>
                  <label class="form-label select-label">Ghari Item</label>
                </div>
              </div>
               <div class="col-md-6 mb-4">

                <br>
                
                <div class="row">
                  <div class="col-20">
                  <label class="form-label select-label">Status</label> 
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="ghari_status"
                      value="Pending"
                      <?php if($fetch["ghari_status"]=='Pending'){
                        echo "checked";
                      }
                      ?> 
                    />
                    Pending
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="ghari_status"
                      value="Deliver"
                      <?php if($fetch["ghari_status"]=='Deliver'){
                        echo "checked";
                      }
                      ?> 
                    />
                    Deliver
                  </div>

                  
                 
                </div>
                </div>
                </div>

              <div class="mt-4 pt-2">
                <!-- <input class="btn btn-primary btn-lg" type="submit" value="Submit" /> -->
                <button type="submit" name="ok" class="btn btn-primary btn-lg" >Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>