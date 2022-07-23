<?php
   session_start();
   

include('db.php');

error_reporting(1);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
      $username = $_POST["username"];
      $password = $_POST["password"];
      $user_id=$_POST["user_id"];
      


      $sql="select * from login where username='".$username."' AND password='".$password."' ";

      $result = mysqli_query($conn,$sql);

      $row =mysqli_fetch_array($result); 


    //   print_r( $row);
    //   exit;

      if($row["usertype"]=="user")
      {
            $_SESSION["username"]=$username;
          $_SESSION["user_id"] = $row['user_id'];
         
            //$_SESSION["user_id"]=$user_id;
            
            // alert("welcome user");
//             echo $_SESSION["user_id"];
// exit;
            
            header("location:user.php");
            
         
          
           
      }

      elseif($row["usertype"]=="admin")
      {
            $_SESSION["username"]=$username;
            
            header("location:admin_index.php");
            
      }
      else{
        // echo " Username and Password incorrect";
           // alert("Username and Password incorrect");
           echo '<script>';  
           echo 'alert("Username and Password incorrect")';  
           echo '</script>';  
          
        }


}

?>

<html>
      <head><title>login</title>
      
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </head>
<body>
<style>#cover {
      background: #222 url('https://unsplash.it/1920/1080/?random') center center no-repeat;
      background-size: cover;
      height: 100%;
      text-align: center;
      display: flex;
      align-items: center;
      position: relative;
  }
  
  #cover-caption {
      width: 100%;
      position: relative;
      z-index: 1;
  }
  
  /* only used for background overlay not needed for centering */
  form:before {
      content: '';
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      background-color: rgba(0,0,0,0.3);
      z-index: -1;
      border-radius: 10px;
  }</style>

    
       <section id="cover" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row text-white">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="display-4 py-2 ">Login Form</h1>
                            <div class="px-2">
                                <form action="#" method="POST" class="justify-content-center">
                                    <div class="form-group">
                                        <label class="sr-only">username</label>
                                        <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg" value="login">Login</button>
                                    <br>
                                    <div class="text-center">
                                          <a class="small" href="register.php">Create an Account!</a>
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