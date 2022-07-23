<?php
include('db.php');

$Id = $_GET['Id']; 

$sql= mysqli_query($conn,"SELECT * from add_ghari where Id='".$Id."'"); // select query 

echo "$sql";
exit();


$fetch = mysqli_fetch_array($sql); // fetch data

    if(isset($_POST['ok']))
    {
    
    $ghari_status=$_POST['ghari_status'];

 
    $sql = "update add_ghari set Id='".$Id."',ghari_status='".$ghari_status."' WHERE Id='".$Id."';";
    echo $sql;
   exit;
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
