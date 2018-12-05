<?php

echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='pink'></center>";

echo"<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Enter Query:(No ; or double quotes)</b></td>
<td><input size='35' placeholder='Run query on results table only' type='text' name='ty'></td><td align='center' colspan='2'><input type='submit' name='se' value='Run'/>";
echo"</td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';
if(isset($_POST['se']))
 {
   $ty=$_POST['ty'];


$q1=mysqli_query($conn,$ty);

echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>Htno</center><td><center>Subcode</center><td><center>Subname</center><td><center>Internal</center><td><center>External</center><td><center>Credits</center></td></tr>";

  while($rows=mysqli_fetch_array($q1,MYSQLI_ASSOC))
{
    $ses=$rows['Htno'];
 $ln=$rows['Subcode'];
 $sem=$rows['Subname'];
 $year=$rows['Internal'];
  $fn=$rows['External'];
$ph=$rows['Credits'];


 echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$ln</center><td><center>$sem</center><td><center>$year</center><td><center>$fn</center><td><center>$ph</center></td></tr>";

}
 echo"</center>";
}

?>

