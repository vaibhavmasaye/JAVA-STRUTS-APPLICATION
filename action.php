<?php 
$error_msg = '';
if(isset($_POST['action']) && $_POST['action'] == 'register'){
    $fname = filter_input(INPUT_POST,'first_name',FILTER_SANITIZE_STRING);
    echo 'leng: '.strlen($fname);
    if(strlen($fname) > 0){
        echo"Please fill the first name";
       $error_msg .= 'First Name<br>';
       
    } 
    
     $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
    if(false ==$lname){
      //  echo"Please fill the Last name";
      $error_msg .= 'Last Name<br>';
    }
     $mobile = filter_input(INPUT_POST,'mobile',FILTER_SANITIZE_NUMBER_INT);
    if(false ==$mobile){
       // echo"Please fill the valid Mobile Number";
       $error_msg .= 'Mobile<br>';
    }
     $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if(false ==$email){
       // echo"Please fill the valid Email";
       $error_msg .= 'Email<br>';
    }
     $pass = filter_input(INPUT_POST,'pass',FILTER_SANITIZE_EMAIL);
    if(false ==$pass){
       // echo"Please fill the valid Password";
       $error_msg .= 'Password<br>';
    }
     $cpass = filter_input(INPUT_POST,'cpass',FILTER_SANITIZE_EMAIL);
    if(false ==$cpass){
        //echo"Please fill the correct confim password";
        $error_msg .= 'Conform Password<br>';
    }
    if($pass !=$cpass){
        //echo'Password and confirm password not match.';
        $error_msg .= 'Password not matching<br>';
    }
     //echo"ALL GOOD";

}

if(strlen($error_msg) > 0)
    echo "The following field/s are not submited properly.  Please correct and resumbmit.<br>".$error_msg ;
    else echo 'error';

    echo $error_msg
?>