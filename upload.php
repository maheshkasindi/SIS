<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'db_conn.php';
mysqli_query($conn,"TRUNCATE yrsem");
$o="null";
$yr=$_POST['year'];
$sem=$_POST['sem'];
$type=$_POST['type'];
mysqli_query($conn,"INSERT INTO yrsem(yr,sem,type)values($yr,$sem,'$type')");
if(isset($_POST['submit'])){
   
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
          $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
           
            fgetcsv($csvFile);
           
            while(($line = fgetcsv($csvFile)) !== FALSE){
                      $m="$line[0]";  
if(strcmp($m,"Htno")!=0)
{
mysqli_query($conn,"INSERT INTO results (Htno, Subcode, Subname, Internal, External, Credits) VALUES ('$line[0]','$line[1]','$line[2]','$line[3]','$line[4]','$line[5]')");
echo "<center>";
$n=mysqli_query($conn,"select Email from bhup where rn='$m'");
$p=mysqli_fetch_assoc($n);
$q=$o;
$o=$p['Email'];

if(mysqli_num_rows($n)>0)
{
if($o===$q)
{
}
else
{
 
$mail = new PHPMailer(true);                              
try {
    
    //$mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'maheshkasindi@gmail.com';                 // SMTP username
    $mail->Password = 'Mahesh@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('maheshkasindi@gmail.com');
    $mail->addAddress($o);     // Add a recipient
   

   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your '.$yr.'-'.$sem.' '.$type.' results are declared';
    $mail->Body    = '<b> <a href="http://localhost/SIS/searchstu.php"> CLICK HERE</a> to check results <br></i>All the best</i></b><br><b>VIGNANs IIT, Duvvada</b></b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $x=$mail->send();
if($x) 
{
    echo "<h5 style='color:green'>Mail sent to ".$m."-".$o."</h5><br>";
} 
else 
{
    echo "Error sending mail";
}
  
}  //closing try
 catch (Exception $e) {
    echo "Error sending mail to ".$m."<br>";
} 

} //closing $o===$q else

} //closing  mysqli num rows if

echo $m." uploaded <br>";
echo "</center>";


} //closing strcmp if

  
 } //closing while
   
            fclose($csvFile);
} //closing uploaded file if
         else
             {
              echo "failed to upload";
             }
} //closing isset if

?>