<?php
// Connect to the database
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"my_dbname");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect***';
}
else
{
	echo 'Connection to db - Success...';
}

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

print("<br>");
print("<br>");
echo 'Your Mail-id is  ';
print( "$email" ); 
print("<br>");
echo 'Your Password is  ';
echo "$pass";
print("<br>");
print("<br>");

//$ins = "INSERT INTO users (users_email, users_pass) VALUES ('xyz','123')";

/*
if(mysqli_query($connect, $sql)
    echo 'Record inserted successfully.';
else
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
*/

$sql="INSERT INTO users (users_email, users_pass) VALUES ('$_POST[users_email]','$_POST[users_pass]')";
if (mysqli_query($connect,$sql))
  echo "New User inserted......";
else
  die('Error: ' . mysqli_error());
  


mysqli_close($connect)


?>

