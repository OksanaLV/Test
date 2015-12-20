<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
	$connect =mysql_connect("Localhost", "root", "") or die ("Couldn't connect!");
	mysql_select_db("phplogin") or die ("Couldn't find db");
	$query = mysql_query("SELECT * FROM users WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	if ($numrows!=0)
	{
while ($row = mysql_fetch_assoc($query))
{
	$dbusername = $row['username'];
	$dbpassword = $row['password'];
}

if ($username==$dbusername&&md5($password)==$dbpassword)
{
	echo "You're in!";
}
else 
echo "Incorrect password!";
	}
	else 
		die ("This user doesn't exist!");
}

else 
die("Please enter username and password");
?>
