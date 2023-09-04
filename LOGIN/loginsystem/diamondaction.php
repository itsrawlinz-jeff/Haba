<?php
 session_start();
 require_once('dbconnection.php');

    
if(isset($_POST['save']))
{


    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $pgender=$_POST['pgender'];
    $rstatus=$_POST['rstatus'];
    $smoke=$_POST['smoke'];
    $drink=$_POST['drink'];
    $income=$_POST['income'];
    $partnerage=$_POST['partnerage'];
    $chronic=$_POST['chronic'];
    $plan=$_POST['plan'];  
    $pdrink=$_POST['pdrink'];
    $membership=$_POST['membership'];


    
    // $image=$_POST['image'];

   

    $sql = "INSERT INTO matchrequests (fullname,email,country,contact,dob,gender,pgender,rstatus,smoke,drink,income,partnerage,chronic,plan,pdrink,membership)
    VALUES('$fullname','$email','$country','$contact','$dob','$gender','$pgender','$rstatus','$smoke','$drink','$income','$partnerage','$chronic','$plan','$pdrink','$membership')";    
 


   if (mysqli_query($conn, $sql)) {
      $message="Match Request Successfull!Proceed To Payment";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("Refresh: 0, https://habadatingclub.com/LOGIN/loginsystem/MPESA/diamondpay.php");
   }
//   else {
//       $messageErr="Check Your Inputs";
//       echo "<script type='text/javascript'>alert('$messageErr');</script>";
//   }
 }
//   // insert in database 
//   if (mysqli_query($conn, $sql)) {
//     // echo " <CENTER> <b>PROCEED TO CHECKOUT</b></CENTER>";
//         header("Location:./choose-payment.php?amount=50&user=$useremail:");
//         // header("location: http://www.google.com");
//         exit();

//  } else {
//     echo "Error: " . $sql . "
// " . mysqli_error($conn);
//  }
//  mysqli_close($conn);

// }
?>