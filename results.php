<?php         ?>
<html>
<head>
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>

<title>upload results</title>
<style>
ul{
text-align:center;
list-style-position:inside;
}
ol{
text-align:center;
list-style-position:inside;
}
h2{
text-align:center;
list-style-position:inside;
}
.c{
font-size:17;
background-color:lightblue;
}
.cl{
font-size:17;
background-color:yellow;
}
</style>
</head>
<body>
<div class="cl"><h2><u><b>INSTRUCTIONS FOR UPLOADING RESULTS</b></u></h2>
<ul>
<li> Upload results in <b>CSV</b> format only </li>
<li> Follow below steps to convert PDF file to CSV file</li>
<ol>
<li> Edit results PDF and whiten the top part using <a href="http://www.sodapdf.com" target="_blank">www.sodapdf.com</a></li>
<li> Convert edited PDF file into Excel file using <a href="http://www.online2pdf.com">www.online2pdf.com</a></li>
<li> Open the converted Excel file in MS Excel and save it as CSV file </li>
</ol>
</ul>
</div>
<center>
<h3 style="color:green">UPLOAD NOW!</h3>
<div class="c">
<form action="upload.php" method="post" id="form" enctype="multipart/form-data">
Year : <select name="year" id="year" required>
<option value="">select</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select><br><br>
Semester : <select name="sem" required>
<option value="">select</option>
<option value="1">1</option>
<option value="2">2</option>
</select><br><br>
Type : <select name="type" required>
<option value="">select</option>
<option value="REGULAR">REGULAR</option>
<option value="SUPPLIMENTARY">SUPLIMENTARY</option>
</select><br><br>

Upload : <input type="file" name="file" required/><br><br>
<input type="submit" id="submit" name="submit" onlick="function()" value="UPLOAD"></input>

</form>
</div>
</center>
</body>
</html>