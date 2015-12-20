<?php
echo "<h1>Registration</h1>";
$submit = $_POST['submit'];
$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$email = strip_tags($_POST['email']);
$homephone = strip_tags($_POST['phomephone']);
$workphone = strip_tags($_POST['workphone']);
$cellphone = strip_tags($_POST['cellphone']);
$address1 = strip_tags($_POST['address1']);
$address2 = strip_tags($_POST['address2']);
$city = strip_tags($_POST['city']);
$state = strip_tags($_POST['state']);
$zip = strip_tags($_POST['zip']);
$country = strip_tags($_POST['country']);
$birthday = strip_tags($_POST['birthday']);
$date =date("Y-m-d");
if ($submit)


	//open database
	$connect = mysql_connect("localhost", "root", "");
	mysql_select_db("phplogin"); //select database
	//$namecheck = mysql_query("SELECT username FROM users WHERE email='$email'");
	//$count = mysql_num_rows($namecheck);
	
	if ($count!=0)
		{
		die ("email already");
		}


	//check for existance
	if ($firstname&&$lastname&&$email&&$address1&&$address2)
	{
		
		//check char length of username and fullname
			if (strlen($firstname)>25||strlen($lastname)>25)
			{
				echo "length of username or fullname is too long!";
			}
			else
			{
					//register the user
					
					$queryreg=mysql_query(" 
						INSERT INTO `users`(`firstname`, `lastname`, `email`, `address1`, `address2`) VALUES ('$firstname', '$lastname', '$email','$address1','$address2')
						");
					die ("You have been registered");
				}
				}
	
	else
		echo "Please fill in all fields!";

?>

<html>
	<form action='add.php' method='POST'>
		<table>
		<tr>
			<td>
				First
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='firstname' value='<?php echo $firstname?>'>
			</td>
		</tr>
		<tr>
			<td>
				Last
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='lastname' value='<?php echo $lastname?>'>
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
			</td>
			<td>
				<input type='email' name='email'>
			</td>
		</tr>
		<tr>
			<td>
				Home
			</td>
			<td>
				<input type='radio' name='phone' value="1">
			</td>
			<td>
				<input type='text' name='homephone'>
			</td>
		</tr>
		<tr>
			<td>
				Work
			</td>
			<td>
				<input type='radio' name='phone' value="2">
			</td>
			<td>
				<input type='text' name='workphone'>
			</td>
		</tr>
		<tr>
			<td>
				Cell
			</td>
			<td>
				<input type='radio' name='phone' value="3">
			</td>
			<td>
				<input type='text' name='cellphone'>
			</td>
		</tr>
		
		<tr>
			<td>
				Address 1
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='address1'>
			</td>
		</tr>
		<tr>
			<td>
				Address 2
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='address2'>
			</td>
		</tr>
		<tr>
			<td>
				City
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='city'>
			</td>
		</tr>
		<tr>
			<td>
				State
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='state'>
			</td>
		</tr>
		<tr>
			<td>
				ZIP
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='zip'>
			</td>
			<tr>
			<td>
				Country
			</td>
			<td>
			</td>
			<td>
				<input type='text' name='country'>
			</td>
		</tr>
		<tr>
			<td>
				Birthday
			</td>
			<td>
			</td>
			<td>
				<input type='date' name='birthday'>
			</td>
		</tr>
		</tr>
		</table>
		<p>
			<input type='submit' name='submit' value='Done'>
		</p>
	</form>
</html>
