<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','new_project');
$res=mysqli_query($con,"select * from add_ghari");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>ID</td><td>Name</td><td>Phone No</td><td>Reference Name</td>
            <td>Ghari Pakage</td>
            <td>Ghari Status</td>
            <td>Date Time</td>

            </tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['Id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['phone_no'].'</td>
                  <td>'.$row['reference_name'].'</td>
                  <td>'.$row['ghari_pakage'].'</td>
                  <td>'.$row['ghari_status'].'</td>
                  <td>'.$row['date_time'].'</td>


                  </tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='GHARI/'.date("Y/m/d").'.pdf';
$mpdf->output($file,'D');
//D
//I
//F
//S
?>