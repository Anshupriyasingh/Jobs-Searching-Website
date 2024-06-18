<?php
 $connection=mysqli_connect("localhost","root","","profile_db");
 if(!$connection)
 {
   die("Not connected with database");
 }
 echo"connected";
 $first=$_POST['first_name'];
 $last=$_POST['last_name'];
 $email=$_POST['email'];
 $phn=$_POST['phn'];
 $count=$_POST['job_role'];
 $relocate=$_POST['role'];
 $add=$_POST['address'];
 $city=$_POST['city'];
 $pin=$_POST['pincode'];
 $date=$_POST['date'];
 $upload=$_POST['upload'];
 
 $s="insert into apply(firstname,lastname,email,phone,country,relocate,address,city,pin,date,image) values('$first','$last','$email','$phn','$count','$relocate','$add','$city','$pin','$date','$upload')";
 $result=mysqli_query($connection,$s);
 if(!$result)
 {
   echo "not sent";
 }
 else
 { 
   
  header("Location: submit.html?error=$em&$data");
	    exit;
   
 }
?>