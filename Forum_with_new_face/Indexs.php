<html>
    <head>
         <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="script.js"></script>
    </head>
    <body>
        <input type="text" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Password">
         <select id="position" style="font-size:18pt;" class="form-control">
	        <option value="user">Student</option>
	        <option value="admin">Admin</option>
	    </select><br><br>
	    <input type="button" id="login_bt" name="login_bt" value="Login">
    <p id="message"></p>
    <script>
    $(document).ready(function(){
    $("#login_bt").click(function(){
        var username = $("#email").val().trim();
        var password = $("#password").val().trim();
        if( username != "" && password != "" ){
            $.ajax({
                url:'checkUser.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                       //   alert(username+"   "+password);
                    var msg = "";
                    if(response == 1){
                        // window.location = "https://www.osaconsultingtech.com";
                         window.location = "student.php";
                    } else if(response == 2){
                        window.location = "admin.php";
                    }else if(response == 3){
                        alert("Looks Like Your Account Is Inactive, Contact OSA's Help Desk!!")
                    } else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>
    
    
    </body>
    
    
    
</html>

