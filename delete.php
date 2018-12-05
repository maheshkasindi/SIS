<html>
<head>


</head>

<body>


<center>
<form method="POST" action="" >
<table border="5" bgcolor="pink"><h1 >
</center>

<tr>
		<td>ENTER ROLL NO:</td>
		<td><input type="text" name="rn" /></td>
	</tr>

	
		<td colspan="2" align="center"><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
if(isset($_POST['submit']))
 {
$rn=$_POST['rn'];


 $del=mysqli_query($conn,"DELETE FROM bhup where rn='$rn'");


if(mysqli_affected_rows($conn)>0)
{
 echo"<br><h3>RECORD SUCCESFULLY DELETED<h3>";
}
else
{

echo"<br><h3>DELETION FAILED</h3>" ;
}
 }
?>