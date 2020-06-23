<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Interview Questions</title>
   <style>
        #topicValue{
                resize:none;
                overflow:hidden;
                min-height: 50px;
                max-height:100%;
                width:95%;
                border:none;
            }
   </style>
</head>
<body>

    
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
       <li ><a class="button" id="<?php echo $row['pageName'];?>"name="my_button" onClick="showCustomer('<?php echo $row['pageName'];?>')"><?php echo $row['pageName'];?></a></li>
 
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
      document.getElementById("topicName").value=text[0];
      //set value in nicEditor textarea by converting the html code as a html value
     nicEditors.findEditor("topicValue").setContent(text[1]);
     
    }
  };
  xhttp.open("GET", "readValue.php?q="+str, true);
  xhttp.send();
}
</script>
<!--THIS BLOCK OF CODE WILL ADD THE NICEDIT TEXT EDITOR FOR TEH BELLOW TEXTAREA-->
<script type="text/javascript" src="nicEdit.js">
        </script>
 <script type="text/javascript">
        bkLib.onDomLoaded(function() { 
                nicEditors.allTextAreas() 
        });
</script>
<br>
<center>
      <input type="text" name="topicName" id="topicName">
      <input type="submit" value="Submits" name="submit" onClick="updateValue()">
    <textarea name="topicValue"  id="topicValue"></textarea></center>

    
     <!--<p id="demo"></p>-->
// <!--THIS BLOCK OF CODE WILL SEND A POST REQUEST TO UPDATE THE VALUE OF PAGENAME AND PAGEVALUE-->
 <script>
// function updateValue() {
//   var xhttp = new XMLHttpRequest();
//   var pageName=document.getElementById("topicName").value.trim();
//   var pageValue=nicEditors.findEditor('topicValue').getContent();
//   var modifiedValue=pageValue.replace(/&nbsp;/g, "|");
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//      document.getElementById("demo").innerHTML = this.responseText;
//     }
//   };
//   var updateData="pageName="+pageName+"&pageValue="+modifiedValue;
//   xhttp.open("POST", "updateValue.php", true);
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send(updateData);
// }
</script>

</body>
<html>
