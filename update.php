       <html>
<head>
<script language="javascript">
     function validate()
{
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
   var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
       var mm=document.reg.mm.value;
        var dd=document.reg.dd.value;
         var yy=document.reg.yy.value;
          var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 if(year=='')
  {
    window.alert("Please Select Year!");
    document.reg.year.focus();
    return false;

 }
 if(semester=='')
  {
    window.alert("Please Select Semester!");
    document.reg.semester.focus();
    return false;

 }
 if(dd=='')
  {
    window.alert("Please Select Day!");
    document.reg.dd.focus();
    return false;

 }
 if(mm=='')
  {
    window.alert("Please Select Month!");
    document.reg.mm.focus();
    return false;

 }
 if(yy=='')
  {
    window.alert("Please Select Year!");
    document.reg.yy.focus();
    return false;

 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }


}


</script>

</head>

<body>


<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<table border="5" bgcolor="pink"><h1 >
</center>

        <tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
<tr>
		<td>SESSION:</td>
 <td>
<select name="session">
<option >Select Session</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select>

</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" ></td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >Select Branch</option>
<option value="CSE">CSE</option>
<option value="ET&T">ET&T</option>
<option value="CIVIL">CIVIL</option>
<option value="MECHNICAL">MECHNICAL</option>
<option value="EEE">EEE</option>
</select>
</td>
</tr>

<tr>
		<td>YEAR:</td>
<td>
<select name="year">
<option >Select Year</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td></tr>

<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >Select Semester</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
</td>
</tr>

<tr>
<td>Date Of Birth(DD-MM-YYYY)</td>
<td><select name="dd">
<option> select day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select>
<select name="mm">
<option> select mounth </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
</select>
<select name="yy">
<option>select year</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
</td>
</tr>
<tr>
<td>PHONE:</td>
<td><input type="phone" name="phone"/></td></tr>
<tr>
<td>EMAIL:</td>
<td><input type="email" name="email"/></td></tr>
<tr>
		<td>ADDRESS:</td>
		<td><textarea type="text" name="address" ></textarea></td>
	</tr>

		
		<td colspan="2" align="center"><input type="submit" name="submit" value="UPDATE" /></td>
	</tr><br><br>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';


if(isset($_POST['submit']))
 {


$fn=$_POST['fn'];
$ln=$_POST['ln'];
$session=$_POST['session'];
$rn=$_POST['rn'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$semester=$_POST['semester'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=strtoupper($address);



 $q1=mysql_query("UPDATE bhup SET fname='$cap1',lname='$cap2',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',phone='$phone',email='$email',address='$cap3' where rn =$rn");
if($q1)
{
 echo"<br><h1>kk</h1>";
}
else
{

echo"Updation failed" ;
}
 }
?>