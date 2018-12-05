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
    window.alert("Please Select Batch!");
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
<title>Books</title>
</head>

<body>
<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center>
<table border="5" bgcolor="pink">
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
		<td>BATCH:</td>
 <td>
<?php
echo"<select name='session'>
<option >select batch</option>
<option value='2015'>2015-19</option>
<option value='2016'>2016-20</option>
<option value='2017'>2017-21</option>
<option value='2018'>2018-22</option>
</select>";
?>
 </td>
</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" minlength="10" maxlength="10" placeholder="Enter 10 digit regd number" pattern="[0-9a-zA-Z]{10}"></td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >select branch</option>
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="IT">IT</option>
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
<option >select year</option>
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
<option >select semester</option>
<option value="1">1</option>
<option value="2">2</option>
</select>
</td>
</tr>

<tr>
<td>DATE OF BIRTH</td>
<td><select name="dd">
<option> select day </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="11">10</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="26">25</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="mm">
<option> select month </option>
<option value="jan">JAN</option>
<option value="feb">FEB</option>
<option value="mar">MAR</option>
<option value="apr">APR</option>
<option value="may">MAY</option>
<option value="jun">JUN</option>
<option value="jul">JUL</option>
<option value="aug">AUG</option>
<option value="sep">SEP</option>
<option value="oct">OCT</option>
<option value="nov">NOV</option>
<option value="dec">DEC</option>
</select>
<select name="yy">
<option>select year</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
</select>
</td>
</tr>
<tr>
<td>PHONE:</td>
<td><input type="text" name="phone" placeholder="Enter 10 digit mobile number" pattern="[0-9]{10}" required/></td></tr>
<tr>
<td>EMAIL:</td>
<td><input type="email" name="email" placeholder="Enter email"  required/></td></tr>
<tr>
		<td>ADDRESS:</td>
		<td><textarea type="textarea" name="address"></textarea></td>
	</tr>

		
		<td colspan="2" align="center"><input type="submit" name="submit" value="ADD" /></td>
	</tr>
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

$q1=mysqli_query($conn,"insert into bhup values('$cap1','$cap2','$session','$rn','$branch','$year','$semester','$dd $mm $yy','$phone','$email','$cap3')");

if($q1)
{
echo "<br><h3>RECORD ADDED SUCCESFULLY</h3>";
}
else
{
echo "<br><h3> RECORD ADDITION FAILED</h3>";
}}
?>