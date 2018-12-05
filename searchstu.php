<center>
<h1 >
<font color="blue">
<b>VIGNAN'S INSTITUTE OF INFORMATION TECHNOLOGY</b>
</font>
</h1>
<br>
<h2>
<font color="black">STUDENT INFORMATION SYSTEM</font>
</h2>
</center

<?php
 require'db_conn.php';
echo"<center>";
 echo"<form method='POST' action=''";
$a=mysqli_query($conn,"select * from yrsem");
$b=mysqli_fetch_assoc($a);
$c=$b['yr'];
$d=$b['sem'];
$z=$b['type'];
echo "<div class='marquee'><p><b>".$c."-".$d." ".$z." RESULTS DECLARED! <br><br>";
echo "</b></p></div>";
echo"<tr><td>
<center><table bgcolor='pink' border='3'>
<tr><td width='250'><b>Enter roll number:</b></td>
<td><input type='text' name='ty'></td><td align='center' colspan='2'><input type='submit' name='se' value='search'/>";
echo"</td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';
if(isset($_POST['se']))
 {
   $ty=$_POST['ty'];


$q1=mysqli_query($conn,"select* from results where Htno='$ty'");
if(mysqli_num_rows($q1)<=0)
echo "<center><b><br>NO RESULTS FOUND</b></center>";
else
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
 echo"<tr bgcolor='pink'><td><center>$ses</center><td><center>$ln</center><td><center>$sem</center><td><center>$year</center><td><center>$fn</center><td><center>$cr</center></td></tr>";
}
}
 echo"</center>";
}


?>
<style type="text/css">
.marquee{
width: 1225px;
line-height:20px;
color:Green;
white-space:nowrap;
overflow:hidden;
box-sizing:border-box;
}
.marquee p {
display: inline-block;
padding-left: 100%;
animation: marquee 15s linear infinite;
}
@keyframes marquee {
0% { transform: translate(0,0);}
100% { transform: translate(-100%,0); }
}
</style>

