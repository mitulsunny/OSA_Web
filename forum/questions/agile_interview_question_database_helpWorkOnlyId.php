<?php
session_start();
if(isset($_SESSION['user'])){
 if (time()-$_SESSION['timestamp']>600){
    session_destroy();
    session_unset();
    header("Location: /Forum/logins/forum_login.html");
}else{
    $_SESSION['timestamp']=time();


if(!empty($_POST['user_id'])){
    $data = array();
    
      //database details
    $servername = "localhost";
    $username = "u185312781_tech";
    $password = "01723Sunny@";
    $dbname = "u185312781_osa";
    
    //create connection and select DB
    $db = new mysqli($servername, $username, $password, $dbname);
    if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }
    
    //get user data from the database
 //  $query = $db->query("SELECT * FROM users WHERE id = {$_POST['user_id']}");
     $query = $db->query("SELECT * from Questions WHERE QuestionId={$_POST['user_id']}");
  
    
  if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
    //returns data as JSON format
    echo json_encode($data);
}

}

}else{
    header("Location: /Forum/logins/forum_login.html");
}
?>