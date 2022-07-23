<?php
   session_start();
   ?>
<html>
<?php include_once("header.php"); ?>
   <?php
      $status=false;
      
      if (!isset($_SESSION['username']) )
       {
        header("location:login.php",$_SESSION["user_id"]);
      }
      // echo $_SESSION['user_id'];
      // exit;
      include('db.php');
      //  if(isset($_POST['ok']))
      //  {
      //    $name=$_POST['name'];
      //    $phone_no=$_POST['phone_no'];
      //    $addres=$_POST['addres'];
      //    // $reference_name=$_POST['reference_name'];
      //    // $ghari_pakage=$_POST['ghari_pakage'];
      //    // $ghari_item=$_POST['ghari_item'];
      //    $ghari_status=$_POST['ghari_status'];
      //    $user_id=$_SESSION["user_id"];
      //    date_default_timezone_set('Asia/Kolkata');
      //    $date_time=date("Y-m-d h:i:sa");
      //    $reference_name = $_SESSION['username'];  
      //    $_2pc=$_POST['2pc'];
      //    $_250g=$_POST['250g'];
      //    $_500g=$_POST['500g'];
      //    $_1kg=$_POST['1kg'];
      //    $_2kg=$_POST['2kg'];
       
        
      
        
          
      //  $query="insert into add_ghari(`name`,`phone_no`,`addres`,`ghari_status`,`user_id`,`reference_name`,`2pc`,`250g`,`500g`,`1kg`,`2kg`)
      //   values('".$name."','".$phone_no."','".$addres."','".$ghari_status."','".$user_id."','".$reference_name."','".$_2pc."','".$_250g."','".$_500g."'
      //   ,'".$_1kg."','".$_2kg."')";
      
      
      //  // echo "$query";
      //  // exit();
      
        
      //     try{
      //       mysqli_query($conn,$query) or die("error");
          
      //       //  echo "hello bro Done";
      
      //     }
       
      //   catch(Exception $e) {
      //    // echo 'Message: ' .$e->getMessage();
      //  }
      //  }
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
         <form class="user" id="formdata"  method="POST"  enctype="multipart/form-data">
         <input type="hidden" id="uid" class="form-control form-control-lg" name="uid" value="<?php echo uniqid();?>"  />
            <input type="hidden" id="id" class="form-control form-control-lg" name="id" value="<?php echo $_SESSION['user_id'];?>"   />
            <input type="hidden" id="username" class="form-control form-control-lg" name="ref_name" value="<?php echo $_SESSION['username'];?>"   />
            <!-- <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >order-id</label>
                     <input type="text"  class="form-control form-control-lg" value="<?php echo uniqid(); ?>"  name="order_id" id="order_id" />
                  </div>
               </div> -->
               <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="form-outline outline datepicker w-100">
                     <label class="form-label" for="firstName">Name</label>
                     <input type="text"  class="form-control form-control-lg" name="name" id="name" required  />
                  </div>
               </div>
               </div>
               <div class="row">
               <div class="col-md-12 mb-3">
                  <div class="form-outline outline datepicker w-100">
                     <label class="form-label" >Phone Number</label>
                     <input type="text" id="phone_no" class="form-control form-control-lg"  name="phone_no"  />
                  </div>
               </div>
               </div>
            
            <div class="row">
               <div class="col-md-12 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label  class="form-label">Adress</label>
                     <textarea name="addres"  id="addres"  rows="3" cols="64" ></textarea>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >2 Pc</label>
                     <input type="text"  class="form-control form-control-lg"  name="g2pc" id="g2pc" />
                  </div>
               </div>
            
            
               <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >250g</label>
                     <input type="text"  class="form-control form-control-lg"  name="g250g" id="g250g" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >500g</label>
                     <input type="text"  class="form-control form-control-lg"  name="g500g" id="g500g" />
                  </div>
               </div>
            
               <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >1 KG</label>
                     <input type="text"  class="form-control form-control-lg"  name="g1kg" id="g1kg" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">
                     <label class="form-label" >2 KG</label>
                     <input type="text" class="form-control form-control-lg"  name="g2kg" id="g2kg" />
                  </div>
               </div>
               
            </div>
            <div id="hello">
                
            </div>
            <div class="row">
               <div class="col-20">
                  <label class="form-label select-label">Status</label> 
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio"  name="ghari_status"  id="ghari_status"  value="Pending"  />
                     Pending
                  </div>
                  <div class="form-check form-check-inline">
                     <input
                        class="form-check-input"
                        type="radio"
                        name="ghari_status"
                        id="ghari_status"
                        value="Deliver"
                        />
                     Deliver
                  </div>
               </div>
            </div>
            <div class="mt-4 pt-2">
               <!-- <input class="btn btn-primary btn-lg" type="submit" value="Submit" /> -->
               <button type="button" name="save" id="butsave" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Submit</button>
            </div>
            <!-- Modal -->
      </div>
      </form>
     
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
               
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <label class="form-label" >Order ID</label> <br><br>
                  <label id="hello" class="form-label"  >Customer Name</label>
                  <span id="uid"></span>
               </div>
               
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
            </div>
         </div>
      </div>
      <!-- <?php
         // include('db.php');
         // $res=mysqli_query($conn,"select * from  add_ghari ");
         
         // $row=mysqli_fetch_assoc($res);

         // $hello=$row['id'];
         // $ress=mysqli_query($conn,"select * from  add_ghari where name=$hello");

         // print_r($res);

         // print_r($ress);



        ?> -->
      <script>
         $(document).ready(function(){
         
         
           // var form = $|('#formdata');
         
           $('#butsave').on('click', function(){
                  
                   //  $("#butsave").attr("disabled", "disabled");
                    var name = $('#name').val();
                    var phone_no = $('#phone_no').val();
                    var addres = $('#addres').val();
                    var g2pc = $('#g2pc').val();
                    var g250g = $('#g250g').val();
                    var g500g = $('#g500g').val();
                    var g1kg = $('#g1kg').val();
                    var g2kg = $('#g2kg').val();
                    var user_id = $('#id').val();
                    var reference_name =$('#username').val();
                  //   var ghari_status = $('#ghari_status').val();
                    var ghari_status = $("input[name='ghari_status']:checked").val();
                    var uid=$('#uid').val();
         
                  //   console.log(name);
                  //  console.log(uid);
               // return false;
             
         
                   
         
                    $.ajax({
                       url:"insert.php",
                       
                       type:'POST',
                      
                       data: {
                               name: name,
                               phone_no: phone_no,
                               addres: addres,
                               g2pc: g2pc,
                               g250g: g250g,			
                               g500g: g500g,	
                               g1kg: g1kg,
                               g2kg: g2kg,
                               id : user_id,
                               username: reference_name,
                               ghari_status: ghari_status,
                               uid:uid
         
                             },
                         // dataType:JSON,
                         
                        
                             
                            //  cache: false,
                             
                               success: function(dataResult){
                                  
                                 // console.log(dataResult);
                                 var hi= JSON.parse(dataResult);
                                 // console.log(hi);       
                                 // console.log(hi.showid);                        
                                 // console.log(hi.showajax);
         
                                 
                               
                              //  if(dataResult.statusCode==200){

                                 console.log(hi);
                                 // $('#exampleModal').modal('show');
                                 $("#butsave").removeAttr("disabled");
                                 // $('#formdata').find('input:text').val('');
                                 // $("#success").show();
                                 // document.getElementById('hello').innerText(hi.showajax);
                                 $('#uid').html(hi.showid); 						

                                 const elem = document.getElementById('hello');
                                  elem.style.color = 'red';

                              //  }
                              //  else if(dataResult.statusCode==201){
                              //    alert("Error occured !");
                              //  }
                               
                             }
                             
                     });
                 
               });
         
         });
         
         
      </script>

<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>