<?php

$con = $con=mysqli_connect("localhost","root","","mv");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
$name=$_POST['fname'];
$lname=$_POST['lname'];
 // Fetching Values from URL.
$email=$_POST['email'];
$password= sha1($_POST['password']); 
// Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
$result = mysqli_query($con,"INSERT INTO register(firstname,lastname, Email, Password) values ('$name','$lname', '$email', '$password')");

if($result){
}
echo '<div>Thank you '.$name . '</div>';
mysqli_close ($con);
?>
