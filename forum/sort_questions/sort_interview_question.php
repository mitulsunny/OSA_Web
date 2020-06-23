<html>
<head>
    <title>Sorting Questions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .tableEven{
            background-color:#F8F9F9;
            border:3px solid black;
        }

        /*
        adding this for templet
        */
        
        	.templete{width:95%; background:white; color:black; margin:0 auto;}
    .clear{overflow:hidden;}
	.firstPart{background-color: darkblue;
		color:white;
		font-size:25px;
		padding-top:10px;
		border-bottom:6px solid #9d16be;
		border-left:2px solid black;
		border-right:2px solid black;
        height:90px;
        
        
		}
        .header{
            position:relative;
            top:-95px;
            text-align:center;
    
        }
	.secondPart{
        border:2px solid #9d16be;
        height: 800px;
        
    }
        .logo{
        margin-left:0px;
        margin-top:0px;
        width:250px;
        height:80px;
        }
      
        .topic{
            font-size:30px;
        }
        .but{
            font-size:30px;
            color:white;
            background-color:blue;
        }
        .update{
            font-size:25px;
            background-color:blue;
            color:white;
            border-radius:5px;
        }
        .myTopic{
            font-siz:30px;
            
        }
        .homeButton{
             font-size:30px;
            color:white;
            background-color:blue;
        }
   
        
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    
            
            
    <div class="firstPart templete clear">
	<img class="logo" src="logo.png">
		<h1 class="header">OSA Consulting Tech</h1>
</div>
            
    <div class="container">
        <table class="table table-bordered">
            <tbody class="row_position">
                <br><br>
    <button class="homeButton" onclick="window.location.href = '/Forum/logins/adminPage.php';">Home Page</button>
<!--this will help to select the value from dropdown menu-->
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form action="" method="post">
    <select name="selectType" class="topic">
        <option value="java" >Java Interview Question</option>
				  <option value="selenium">Selenium Interview Question</option>
				  <option value="database">SQL Interview Question </option>
				  <option value="testNG">TestNG Interview Question </option>
				  <option value="junit">Junit Interview Question </option>
				   <option value="maven">Maven Interview Question</option>
				  <option value="log4j">Log4J Interview Question</option>
				  <option value="jenkin">Jenkin Interview Question </option>
				  <option value="collection">Collection Interview Question </option>
				   <option value="agile">Agile Interview Question </option>
				   <option value="behavioral">Behavioral Interview Question </option>
				  <option value="others">Others Interview Question </option>
				   <option value="api">API Interview Question </option>
				  <option value="git">Git Interview Question </option>
				  <option value="extent">Extents Report Interview Question </option>
				  <option value="cucumber">Cucumber Interview Question </option>
        
        
        
        <!--<option value="java">Java Questions</option>-->
        <!--<option value="cucumber">Cucumbers Questions</option>-->
        <!--<option value="selenium">Selenium Questions</option>-->
        <!--<option value="agile">Agile Questions</option>-->
        <!--<option value="testng">TestNG Questions</option>-->
        <!--<option value="log4j">Log4j Question</option>-->

    </select>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input  class="but" type="submit" name="getQuestionType" value="Get Now"></td>
</form>

<?php
if(isset($_POST['getQuestionType'])) 
{
  $options = $_POST['selectType'];
}
//until this, we are taking the value from dropdown menu

            require('db_config.php');
           // $options=java;
            $count=0;
           // $sql = "SELECT * FROM Questions where topic='$options' ORDER BY position_order";
            $sql="SELECT question, answer, note, topic, QuestionId from Questions where topic='$options' ORDER BY position_order";
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><span style="font-size: 32pt">'.$options. '</span></u>';
            //$sql = "SELECT * FROM Questions ORDER BY position";
            $users = $mysqli->query($sql);
            
  
            while($user = $users->fetch_assoc()){
      
            ?>
                <tr class="tableEven"  id="<?php echo $user['QuestionId'] ?>">
                    
                    <td>
                       <?php echo '<input type="text" readonly="readonly" style="font-size: 12pt" id="QuestionId'.$user['QuestionId'].'" value="'.$user['QuestionId'].'">';?>
                    <br><?php echo 'Question:<br><input type="text" style="font-size: 12pt" id="question'.$user['QuestionId'].'" size="100" value="'.$user['question'].'">';?><br>
                    <?php echo 'Answer:<br><textarea type="text" style="font-size: 12pt" cols="100" rows="10" id="answer'.$user['QuestionId'].'" size="100"> '.$user['answer'].''; echo '</textarea>'?>
                    <br><?php echo 'Topic:<br><input type="text" style="font-size: 12pt" id="topic'.$user['QuestionId'].'" size="50" value="'.$user['topic'].'">'; ?>
                    <?php echo $user['position_order'] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                       <button class="update" type="submit" id="<?php echo "update".$user['QuestionId'];?>" >UPDATE</button></td>
                    
                    <script>
            $(document).ready(function(){
                $("<?php echo "#update".$user['QuestionId'];?>").click(function(){
                    var question=$("<?php echo "#question".$user['QuestionId'];?>").val();
                    var answer=$("<?php echo "#answer".$user['QuestionId'];?>").val();
                    //var answer=$("#answer").val();
                    var topic=$("<?php echo "#topic".$user['QuestionId'];?>").val();
                    //var topic=$("#topic").val();
                    var QuestionId=$("<?php echo "#QuestionId".$user['QuestionId'];?>").val();
                   // var QuestionId=$("#QuestionId").val();
                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            question1:question,
                           answer:answer,
                            topic:topic,
                           QuestionId:QuestionId
                           //echo  'Answer: <input type="text" id="answer'.$row['QuestionId'].'" size="100" value="'.$row['answer'].'">';?> <br>
                            //question:question,
                           // answer:answer,
                           // topic:topic,
                           // QuestionId:QuestionId
                           
                           
                        },
                        success:function(response){
                            alert(response);
                        }
                    });
                });
            });
        </script>
                </tr>
                
            <?php 
            } ?>
            </tbody>
        </table>
    </div> <!-- container / end -->
</body>

 
<script type="text/javascript">
    $( ".row_position" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url:"ajaxPro.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('your change successfully saved');
            }
        })
    }
</script>
</html>