
<?php

echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='pink'></center>";

echo"<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Enter roll number:</b></td>
<td><input type='text' name='ty'></td><td align='center' colspan='2'><input type='submit' name='se' value='search'/>";
echo"</td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';
if(isset($_POST['se']))
 {
   $ty=$_POST['ty'];


$q1=mysqli_query($conn,"select* from bhup where fname='$ty' OR rn='$ty'");
if(mysqli_num_rows($q1)<=0)
echo "<center><b>NO DATA FOUND</b></center>";
else
{
echo"<center><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>BATCH</center><td><center>ROLL NO</center><td><center>FIRST NAME</center><td><center>LAST NAME</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>BRANCH</center><td><center>DOB</center><td><center>PHONE</center><td><center>EMAIL</center><td><center>ADDRESS</center></td></tr>";

  while($rows=mysqli_fetch_array($q1,MYSQLI_ASSOC))
{
    $ses=$rows['session'];
 $ln=$rows['lname'];
 $sem=$rows['semester'];
 $year=$rows['year'];
  $fn=$rows['fname'];
$ph=$rows['Phone'];
$em=$rows['Email'];
 $ln=$rows['lname'];
 $br=$rows['branch'];
 $rn=$rows['rn'];
  $add=$rows['address'];
   $dob=$rows['dob'];

 echo"<tr bgcolor='pink'><td contenteditable='true'><center>$ses</center><td><center>$rn</center><td><center>$fn</center><td><center>$ln</center><td><center>$year</center><td><center>$sem</center><td><center>$br</center><td><center>$dob</center><td><center>$ph</center><td><center>$em</center><td><center contenteditable='true'>$add</center></td></tr>";
}
}
 
$q1=mysqli_query($conn,"select* from results where Htno='$ty'");


if(mysqli_num_rows($q1)>0)
{
echo"<center><br><table border='1'>";
  echo"<tr bgcolor='yellow'><td><center>Htno</center><td><center>Subcode</center><td><center>Subname</center><td><center>Internals</center><td><center>Externals</center><td><center>Credits</center></td></tr>";

  while($rows=mysqli_fetch_array($q1,MYSQLI_ASSOC))
{
    $ses=$rows['Htno'];
 $ln=$rows['Subcode'];
 $sem=$rows['Subname'];
 $year=$rows['Internal'];
  $fn=$rows['External'];
$cr=$rows['Credits'];
 echo"<br><tr bgcolor='pink'><td><center>$ses</center><td><center>$ln</center><td><center>$sem</center><td><center>$year</center><td><center>$fn</center><td><center>$cr</center></td></tr>";
}
}
 echo "</center>";
echo"</center>";
}

?>

