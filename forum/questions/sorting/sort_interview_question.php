<html>
<head>
    <title>Sorting Questions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tbody class="row_position">
<!--this will help to select the value from dropdown menu-->
<br><br><form action="" method="post">
    <select name="selectType">

        <option value="java">Java Questions</option>
        <option value="cucumber">Cucumbers Questions</option>
        <option value="selenium">Selenium Questions</option>
        <option value="agile">Agile Questions</option>
        <option value="testng">TestNG Questions</option>
        <option value="log4j">Log4j Question</option>

    </select>
    <input type="submit" name="getQuestionType" value="Get Now"></td>
</form>
<?php
if(isset($_POST['getQuestionType'])) 
{
  $options = $_POST['selectType'];
}
//until this, we are taking the value from dropdown menu

            require('db_config.php');
           // $options=java;

            $sql = "SELECT * FROM Questions where topic='$options' ORDER BY position_order";
            //$sql = "SELECT * FROM Questions ORDER BY position";
            $users = $mysqli->query($sql);
            while($user = $users->fetch_assoc()){
            ?>
                <tr  id="<?php echo $user['QuestionId'] ?>">
                    <td><?php echo $user['question'] ?></td>
                    <td><?php echo $user['answer'] ?></td>
                    <td><?php echo $user['note'] ?></td>
                    <td><?php echo $user['topic'] ?></td>
                    <td><?php echo $user['position_order'] ?></td>
                </tr>
            <?php } ?>
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