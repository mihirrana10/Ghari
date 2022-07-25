<?php

use Mpdf\Tag\Br;


   include('db.php');

   

//    extract($_POST);

//    if(isset($_POST['subm	it'])){

      // print_r($_POST);
      // exit;
      $name=$_POST['name'];
	$phone_no=$_POST['phone_no'];
	$addres=$_POST['addres'];
	$ghari_status=$_POST['ghari_status'];
	$g2pc=$_POST['g2pc'];
	$g250g=$_POST['g250g'];
	$g500g=$_POST['g500g'];
	$g1kg=$_POST['g1kg'];
	$g2kg=$_POST['g2kg'];
	$user_id=$_POST['id'];
      $reference_name=$_POST['ref_name'];
	$uid=$_POST['uid'];
	
	// $name=$_POST['name'];
	// $phone_no=$_POST['phone_no'];
	// $addres=$_POST['addres'];
	// $ghari_status=$_POST['ghari_status'];
	// $g2pc=$_POST['g2pc'];
	// $g250g=$_POST['g250g'];
	// $g500g=$_POST['g500g'];
	// $g1kg=$_POST['g1kg'];
	// $g2kg=$_POST['g2kg'];
	// $user_id=$_POST['id'];
      // $reference_name=$_POST['username'];
	// $uid=$_POST['uid'];

	

// echo $user_id;
// echo $reference_name;



// echo json_encode(['name'=>$name]);

   

      $query="insert into add_ghari(`name`,`phone_no`,`addres`,`ghari_status`,`g2pc`,`g250g`,`g500g`,`g1kg`,`g2kg`,`user_id`,`reference_name`,`uid`)
        values('".$name."','".$phone_no."','".$addres."','".$ghari_status."','".$g2pc."','".$g250g."','".$g500g."'
         ,'".$g1kg."','".$g2kg."','".$user_id."','".$reference_name."','".$uid."')";

      if (mysqli_query($conn, $query)) {
		$show=$name;
		$showid=$uid;

		// $data = file_get_contents($show);

		echo json_encode(["statusCode"=>201,'name'=>$show,'uid'=>$showid]);

		
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);


      

      // header('location: addghari.php');

//    }

?>