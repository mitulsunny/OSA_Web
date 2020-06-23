<?php
if(isset($_POST['submit'])){
    $fName=$_POST['fName'];
    $email=$_POST['email'];
    $topic=$_POST['topic'];
    $phone=$_POST['phone'];
    $meg=$_POST['messages'];
    $to='mitul.li@yahoo.com.com';
    $subject='From OSA Web Page';
    $message="Name: ".$fName."\n"."Phone: ".$phone."\n"."Email:".$email."\n"."Topic: ".$topic."\n\n"."Messag: ".$meg;
    $headers="From:".$email;
    if(mail($to,$subject, $message, $headers)){
      
        echo "<h3>Sent Successfully! Thank you"." ".$fName.", We will contact you shortly!!</h3>";
         header("Location: about.html");
    }else{
        echo "Something Went Worng!";
        header("Location: about.html");
    }
    
}
?>