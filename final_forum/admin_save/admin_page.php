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
              
                /*overflow-y: scroll;*/
  
    }
   .logo {
            max-width: 40px;
            
            height: auto; /* So the image doesn't distort */
           }
    .header{
          font-size:30px;
          position: relative;
          top:-7px;
          left:10px;
           }
    #publish_btn{
         
          position: relative;
          top:-7px;
          left:100px;
           }

   </style>
</head>
<body >
<img class="logo" src="logo.png"><span class="header">OSA Consulting Tech</span>
<button id="publish_btn">Publish</button>
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
// 		$("#my").attr("disabled", "disabled");
		var topicName = $('#topicName').val().trim();
		var topicValue=nicEditors.findEditor('topicValue').getContent();
 //           alert(topicName+".  "+ topicValue);
			$.ajax({
				url: "updateValue.php",
				type: "POST",
				data: {
					topicName: topicName,
					topicValue: topicValue
				},
			    	success:function(response){
                            alert(response);
                        }
			});
		
		
	});
});
</script>


</body>
<html>
