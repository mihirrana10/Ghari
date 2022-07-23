<?php
include('db.php');
//if(isset($_POST['ok'])){
    $Id =$_GET['Id'];   
    
    $sql = "DELETE FROM add_ghari WHERE Id='".$Id."';";    
   
    if ($conn->query($sql) === TRUE) {
         $message = " deleted successfully.";
    echo "<script>alert('$message');</script>";
    header("Location:admin_index.php");
                exit();
        // echo "<br>Record deleted successfully";
    }  else {   
        echo "<br>Error deleting record: " . $conn->error;
}
//}
?>