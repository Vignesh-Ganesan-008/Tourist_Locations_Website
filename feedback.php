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
//$pass = $_POST["pass"];
$fname= $_POST["fname"];
$lname= $_POST["lname"];
//$uname= $_POST["uname"];
$country= $_POST["country"];
//$pass2 = $_POST["pass2"];
$feed= $_POST["subject"];
//$Q2= $_POST["Q2"];
//$pass2= $_POST["pass2"];

//if(empty($_POST["fname"]))
//	echo '<script type="text/javascript">window.alert("Hi There, I am the Alert Box!");</script>';

$sql="INSERT INTO feedback (fristname,lastname,email,country,feedback) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[country]','$_POST[subject]')";
if (mysqli_query($connect,$sql))
{
	  //echo "<script type='text/javascript'> window.alert('thanks for your feedback'); </script>";
	  header('Location:Contact.html');
	  echo "<script type='text/javascript'> window.alert('thanks for your feedback'); </script>";
}
else
{
	 echo "<script type='text/javascript'>window.alert('mysqli_error($connect)');</script>";
	 header('Location:Contact.html');
}//die('Error: ' . mysqli_error($connect));




mysqli_close($connect)


?>
