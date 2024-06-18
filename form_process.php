<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstraps.min.css" rel="stylesheet">
     <!-- Template Stylesheet -->
    <link href="style8.css" rel="stylesheet">
</head>
<body>
<?php
  $connection=mysqli_connect("localhost","root","","profile_db");
 if(!$connection)
 {
   die("Not connected with database");
 }
 $name=$_POST['name'];
 $email=$_POST['email'];
 $sub=$_POST['subject'];
 $msg=$_POST['message'];
 $s="insert into contact(name,email,subject,message) values('{$name}','{$email}','{$sub}','{$msg}')";
 $result=mysqli_query($connection,$s);
 if(!$result)
 {
   echo"Message not sent";
 }
 else
 { 
   
  header("Location: form.html?error=$em&$data");
	    exit;
 }
?>
</body>
</html>