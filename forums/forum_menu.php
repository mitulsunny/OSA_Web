<!DOCTYPE html>
<html>
<head>
    <title>Interview Questions | OSA Consulting Tech Corp</title>
    <script>
  
function showUser(str) {
     
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","read_questions_helper.php?q="+str,true);
        xmlhttp.send();
}
 function changeColor(id) {    
        var tabs = document.getElementsByClassName('button')
        for (var i = 0; i < tabs.length; ++i) {
            var item = tabs[i];
            item.style.backgroundColor = (item.id == id) ? "#EC407A" : "#0db094";
        }
    }
     
</script>
    <script src="querymy.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.header{
 right: 0;
 left: 0;
 margin-right: auto;
 margin-left: auto;
 z-index: 1;
 position: fixed;
 background-color:#0040FF;
 height:75px;
 width:100%;
 border-bottom:1px solid black;
 
}
 
html, body {width: auto!important; overflow-x: hidden!important} 
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}
    .icone{
    display:none;
    }
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:#0db094;
  position: fixed;
  height: 100%;
  margin-top:-12px;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
  border-bottom:1px solid white;
}

.sidebar a.active {
  background-color: #1a990e;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #EC407A;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
   
}


@media screen and (max-width: 750px) {

  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
   .icone{
    display:block;
    }
    }
@media screen and (max-width: 450px) {
  .sidebar a {
    text-align:center;
    float: none;
  }
    .icone{
    display:block;
    }
 
 .sidebar {
  overflow: hidden;
  background-color: #333;
  position: relative;
  top:-23px;
}   
 .sidebar a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
  border-top:1px solid white;
}

.sidebar a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}
.active {
  background-color: #4CAF50;
  color: white;
}

}
.bod{
    padding-left:30px;
    padding-right:30px;
    background-color:#FAFAFA;
    line-height:25px;
}
.logo{
    width:70px;
    height:60px;
    padding-top:1%;

}
.osa{
  font-size:180%;
  color:white;
  position:relative;
  top:-13px;

  
}

</style>
</head>
<body>
    <!--Start Header from Here-->
 <div class="header">
     <center>
     <img class="logo"  src="/forums/images/logo.png"> <span class="osa">OSA Consulting Tech</span>
    </center>
 </div>  
<!--Ended Header-->
<br><br><br><br><br>
<!--<span class="header">-->
<!--<img class="logo"  src="/forums/images/logo.png">-->
<!--</span>-->
<div class="sidebar" >
    <a class="active"  href="#home">Menu</a>
    <script> 
    
    showUser('java');
   changeColor("java");
    </script>
 <div id="myLinks">
        <?php
        include_once('db_connection.php');
        $sql = "SELECT topicName, displayName from Topic";
        $rs = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)) { 
         echo $row[''];?>
        <a class="button" id="<?php echo $row['topicName'];?>" onclick="showUser('<?php echo $row['topicName'];?>');changeColor(id);"> <?php echo $row['displayName'];?> </a>
        <?php
        }
        mysqli_close($conn);
        ?>
 
  </div>
  <br>
 <span class="icone">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</span>

</div>
<script>

function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<div class="content">
<p class="bod" id="txtHint"></p>
  <h3>Loading........</h3>
</div>

</body>
</html>
