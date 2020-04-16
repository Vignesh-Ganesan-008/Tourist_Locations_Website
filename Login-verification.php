<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"trip");
if(mysqli_connect_errno($connect))
{
 //echo 'Failed to connect***';
}
else
{
	//echo 'Connection to db - Success...';
}

// Grab User submitted information
$email = $_POST["uname"];
$pass = $_POST["pass"];

print("<br>");
print("<br>");
echo 'Your Mail-id is  ';
print( "$email" ); 
print("<br>");
echo 'Your Password is  ';
echo "$pass";
print("<br>");

$result = mysqli_query($connect,"SELECT username, password FROM signup3");

print("<br>");
$flag = 0;
while($row = mysqli_fetch_row($result))
{
	if($email==$row[0] && $pass==$row[1])
	{
		$flag = 1;
		break;
	}
}

print("<br>");
if ($flag==1)
	header('Location:Final.html');//echo "You are a validated user.";
else
{
	echo "<script type='text/javascript'>window.alert('wrong username or password');</script>";
	header('location:Login.html');//echo "Invalid.";
}	
?>

