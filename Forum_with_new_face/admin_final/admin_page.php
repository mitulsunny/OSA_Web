<?php
session_start();
if(isset($_SESSION['uname'])){
 if (time()-$_SESSION['timestamp']>600){
    session_destroy();
    session_unset();
    header("Location: /forum_test.html");
}else{
    $_SESSION['timestamp']=time();
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="script.js"></script>
   <title>Interview Questions</title>
   <style>
        textarea{
                /*resize:none;*/
                overflow:hidden;
                height:100%;
                width:100%;
                overflow-y: scroll;
    }
   .logo {
            max-width: 40px;
            height: auto; /* So the image doesn't distort */
           }
    /*.header{*/
    /*      font-size:30px;*/
    /*      position: relative;*/
    /*      top:-7px;*/
    /*      left:10px;*/
    /*       }*/
     #header {
            width:100%;
            background-color:#0606e0;
/*            border-bottom: 15px solid gray;*/
            overflow: hidden; 
        }
        #publish_btn{
          position: relative;
          top:-7px;
          left:100px;
           }
         
           .headerOne button{
           
               padding:6px;
               margin-right:10px;
               color: gray;
               background-color:#0606e0;
               border:none;
               font-size:16px;
              
           }
           #second input{
            float:right;
             background-color:#0606e0;
             border:1px solid #0606e0;
             font-size:18px;
             padding:5px;
          }
    
 .printName{
            background-color:gray;
            height:25px;
            color:white;
            font-size: 18px;
            text-align: right;
            padding-right:20px;
            padding-bottom:5px;
            }
           
   </style>
</head>
<body >
    
    <div id="header">
    <div id="first">
        <img src="full_logo.png" width="350px">
    </div>
    <div id="second">
<!--        <input id="your_name" type="button" value="Your Name miha ">-->
      <input id="butn" type="button" value="Publish Page">
     
    </div>
    
</div>
</div>
<div class="printName">
     <label><?php echo Welcome," ".$_SESSION['uname'];?></label>
</div>     
    
<!--THIS METHOD IS USED TO ADD TOPIC by calling in create button-->
<script>
function addTopic() {
  var xhttp = new XMLHttpRequest();
  var pageName = prompt("PLEASE ENTER THE TOPIC NAME", "");
  var p=pageName.trim();
  if(p==""||p==" "){
      alert("YOU DID NOT ENTER ANY AVLUE");
  }else{
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    window.location.reload()
    }
  };
  var data="pageName="+pageName+"&pageValue= ";
  xhttp.open("POST", "add.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(data);
  }

}

</script>

   <?php
        include_once('db_connection.php');
        $sql = "SELECT pageName, pageValue from Page";
        $rs = mysqli_query($conn,$sql);?>
        <div id='cssmenu'>
        <ul>
      <li ><a <button id="create_btn" name="create_btn" onclick="addTopic();">CREATE</button></a></li>
   <?php
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];?>
       <li ><a class="button" id="<?php echo $row['pageName'];?>"name="my_button" onClick="showCustomer('<?php echo $row['pageName'];?>');changeColor(id);"><?php echo $row['pageName'];?></a></li>
        <?php
        }?>
        <li ><a href="/final_forum/forum/admin.php" >Admin Page</a></li>
          </ul>
       </div>
        <?php
        mysqli_close($conn);
        ?>
        
        
        
 <!--READ THE BUTTON NAME FROM DATABASE-->
 
 <script>
 function readValue(){
 <?php
        include_once('db_connection.php');
        $sql = "SELECT pageName, pageValue from Page";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];
          echo $row['pageName'];
        }?>
 }
 </script>
 
 





 <script>
 //THIS METHOD IS READING THE THE VALUE TO SET IN INPUT BOX AND 
 //TEXTAREA FILE
function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //splitting the read value from the readVAlue.php based on |
      var text=xhttp.responseText.split('|');  
      //set first index value of text in input box by using normal html and javascript
      //document.getElementById("topicName").setAttribute('value',text[0]);
      document.getElementById("topicName").value=text[0];
      //set value in nicEditor textarea by converting the html code as a html value
      nicEditors.findEditor('topicValue').setContent(text[1]);
       document.getElementById("pageId").value=text[2];
    }
  };
  xhttp.open("GET", "readValue.php?q="+str, true);
  xhttp.send();
}

//This method is used for changing the active button color
 function changeColor(id) {    
        var tabs = document.getElementsByClassName('button')
        for (var i = 0; i < tabs.length; ++i) {
            var item = tabs[i];
             item.style.backgroundColor = (item.id == id) ? "#EC407A" : "#0606e0";
        
        }
    }
</script>
<!--THIS BLOCK OF CODE WILL ADD THE NICEDIT TEXT EDITOR FOR TEH BELLOW TEXTAREA-->
<script type="text/javascript" src="nicEdit.js">
        </script>
        <script type="text/javascript">
        	bkLib.onDomLoaded(function() { 
                nicEditors.allTextAreas();
                
                //keeping the top pannel fixed when textarea will have full screen. Here to 
                var sticky_panelContain_offset_top = $('div.nicEdit-panelContain').offset().top;
                var sticky_panelContainer = function(){
                   var scroll_top = $(window).scrollTop();
                   if (scroll_top > sticky_panelContain_offset_top) { 
                       $('div.nicEdit-panelContain').css({ 'position': 'fixed', 'top':0, 'left':0 });
                    } else {
                        $('div.nicEdit-panelContain').css({ 'position': 'relative' }); 
                    }
                };
                sticky_panelContainer();
                $(window).scroll(function() {
                    sticky_panelContainer();
                });
//   ===============Until Here===============
                });
</script>
  <br> <center> <input type="hidden" name="pageId" id="pageId">
  <input type="text" name="topicName" id="topicName">
    <button id="my" name="my" onclick="readValue();">SAVE</button><br></center>
    <textarea name="topicValue"  id="topicValue"></textarea>

<script>
$(document).ready(function() {
	$('#my').on('click', function() {
		var topicName = $('#topicName').val().trim();
		var topicValue=nicEditors.findEditor('topicValue').getContent();
			$.ajax({
				url: "updateValue.php",
				type: "POST",
				data: {
					topicName: topicName,
					topicValue: topicValue
				},
			    	success:function(response){
                            alert("The value is saved");
                        }
			});
		
		
	});
});



$(document).ready(function() {
	$('#publish').on('click', function() {
// 		$("#my").attr("disabled", "disabled");
		var topicName = $('#topicName').val().trim();
		var topicValue=nicEditors.findEditor('topicValue').getContent();
 //           alert(topicName+".  "+ topicValue);
			$.ajax({
				url: "updateValue_production.php",
				type: "POST",
				data: {
					topicName: topicName,
					topicValue: topicValue
				},
			    	success:function(response){
                            alert("This Page Is Now In Production!!!");
                        }
			});
		
		
	});
});
</script>


</body>
<html>
    <?php
}
}else{
    header("Location: /forum_test.html");
}
?>
