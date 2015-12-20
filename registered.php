<?php
echo "<h1>Registration</h1>";
$submit = $_POST['submit'];
$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);
$date =date("Y-m-d");
if ($submit)
{

	//open database
	$connect = mysql_connect("localhost", "root", "");
	mysql_select_db("phplogin"); //select database
	$namecheck = mysql_query("SELECT username FROM users WHERE username='$username'");
	$count = mysql_num_rows($namecheck);
	
	if ($count!=0){
		die ("Username already");
	}


	//check for existance
	if ($firstname&&$lastname&&$username&&$password&&$repeatpassword)
	{
		
		if ($password==$repeatpassword) {
			//check char length of username and firstname
			if (strlen($username)>25||strlen($firstname)>25||strlen($lastname)>25)
			{
				echo "length of username or firstname is too long!";
			}
			else
			{
				//check password length
				if (strlen($password)>25 || strlen($password)<6)
				{
					echo "Password must be between 6 and 25 characters";
				}
				else
				{
					//encrypt password
					$password = md5($password);
					$repeatpassword= md5($repeatpassword);
					//register the user
					
					$queryreg=mysql_query(" 
						INSERT INTO `users`(`firstname`, `lastname`, `username`, `password`, `date`) VALUES ('$firstname', '$lastname','$username','$password','$date')
						");
					die ("You have been registered");
				}
			}
		}
	}
	else
		echo "Please fill in all fields!";
}

?>

<html>

<form action='register.php' method='POST'>
	<table>
		<tr>
			<td>
				Enter your first name 
			</td>
			<td>
				<input type='text' name='firstname' value='<?php echo $firstname?>'>
			</td>
		</tr>
		<tr>
			<td>
				Enter your last name 
			</td>
			<td>
				<input type='text' name='lastname' value='<?php echo $lastname?>'>
			</td>
		</tr>
		<tr>
			<td>
				Choose a username 
			</td>
			<td>
				<input type='text' name='username' value='<?php echo $username?>'>
			</td>
		</tr>
		<tr>
			<td>
				Choose a password
			</td>
			<td>
				<input type='password' name='password'>
			</td>
		</tr>
		<tr>
			<td>
				Repeat your password
			</td>
			<td>
				<input type='password' name='repeatpassword'>
			</td>
		</tr>
	</table>
	<p>
		<input type='submit' name='submit' value='Register'>
	</p>
</form>
</html>
