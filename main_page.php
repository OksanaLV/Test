<?php
	$connect = mysql_connect("localhost", "root", "");
	mysql_select_db("phplogin"); //select database
	$namecheck = mysql_query("SELECT `lastname`, `firstname`, `email`, `username` FROM `users`");
	if (!$namecheck) die(mysql_error());
	$query = mysqli_query()
	$count = mysql_fetch_array($namecheck);
	echo '<table>
		<tr>
			<td align="left"><b>Last</b></td>
			<td align="left"><b>First</b></td>
			<td align="left"><b>Email</b></td>
			<td align="left"><b>Best Phone</b></td>
			<td></td>
		</tr>';
for ($u = 0 ; $u<$count; ++$u)
{
		echo	
	'<tr><td align="left">'.
	$u['lastname'] . '</td> <td align="left>' .
	$u['firstname'] . '</td> <td align="left>' .
	$u['email'] . '</td> <td align="left>' .
	$u['username'] . '</td> <td align="left">';
	echo '</tr>';
}
echo '</table>'
	
?>
