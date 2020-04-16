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
$Q1= $_POST["Q1"];
$Q2= $_POST["Q2"];
$pass1= $_POST["pass1"];
$pass2= $_POST["pass2"];


if($pass1==$pass2)
{



$result = mysqli_query($connect,"SELECT *FROM signup3");

$flag=0;

while ($ro = mysqli_fetch_row($result)) {
	if($Q1==$ro[7] && $Q2==$ro[8])
	{

		$flag=1;
		break;
	}
}


if($flag==1)
{
$x="UPDATE signup3 SET password='$_POST[pass1]' WHERE email='$_POST[email]'";
if(mysqli_query($connect,$x))
{
	//echo "suces";
	header('Location:Final.html');
}
else
	die('Error: '.mysqli_error($connect));
}
else
{
		echo "<script type='text/javascript'>window.alert('wrong answer');</script>";
}

}
else
{
	echo "<script type='text/javascript'>window.alert('password does not match')</script>";
}

mysqli_close($connect)


?>