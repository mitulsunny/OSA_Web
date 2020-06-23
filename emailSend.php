<?php
// if(isset($_POST['submit'])){
    $fName=$_POST['fName1'];
    $lName=$_POST['lName1'];
    $topic=$_POST['topic1'];
    $phone=$_POST['phone1'];
    $email=$_POST['email1'];
    $meg=$_POST['message1'];
    $to="mdobqa@gmail.com";
    $subject1='OSA Consulting Tech Corp';
    $subject='From OSA Web Page';
    $message="Name: ".$fName." ".$lName."\n"."Phone: ".$phone."\n"."Emali: ".$email."\n"."Topic: ".$topic."\n\n"."Message: ".$meg;
    $headers="From:".$email;
     mail($to,$subject, $message, $headers);
// $from=$email;
// $headers1="info@osaconsultingtech.com";
//$message1="Thank You ".$fName." ".$lName." for your request, we will contact with you shortly!!";
// mail($from,$subject1, $message1,$headers1);
   
    // if(mail($to,$subject, $message, $headers)){
    //   //  echo "<h3>Sent Successfully! Thank you"." ".$fName." ".$lName.", We will contact you shortly!!</h3>";
    // }else{
    //   //  echo "Something Went Worng!";
    // }
    
// }
?>