<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"trip");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect***';
}
else
{
	echo 'Connection to db - Success...';
}

$email = $_POST["email"];
$pass = $_POST["pass"];
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$uname= $_POST["uname"];
$country= $_POST["country"];
$pass2 = $_POST["pass2"];
$Q1= $_POST["Q1"];
$Q2= $_POST["Q2"];
//$pass2= $_POST["pass2"];

if(empty($_POST["fname"]))
	echo '<script type="text/javascript">window.alert("Hi There, I am the Alert Box!");</script>';

if($pass==$pass2)
{
$sql="INSERT INTO signup3 (username,password,email,firstname,lastname,country,email2,Q1,Q2) VALUES ('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[lname]','$_POST[country]','$_POST[email]','$_POST[Q1]','$_POST[Q2]')";
if (mysqli_query($connect,$sql))
{
	  echo "<script type='text/javascript'> window.alert('New User inserted......'); </script>";
	  header('Location:Final.html');
}
else
{
	echo "<script type='text/javascript'> window.alert('error'); </script>";
	header('Location:SignUp.html');
	  die('Error: ' . mysqli_error($connect));
}
}
else
{
	echo "<script type='text.javascript'> window.alert('password does not match'); </script>";
	header('Location:SignUp.html');//echo "*** the password do not match ***";
}


mysqli_close($connect)


?>