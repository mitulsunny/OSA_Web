<html>
    <head>
        <title>Interview Question</title>
        <style>
            textarea{
                resize:none;
                overflow:hidden;
                min-height: 50px;
                max-height:100px;
                width:100%;
                border:none;
            }
            
        </style>
    </head>
    <body>
        <script type="text/javascript">
            function auto_grow(element){
                element.style.height = "5px";
                 element.style.height= (element.scrollHeight)+"px";
                
            }
        </script>
        <script type="text/javascript" src="nicEdit.js">
        </script>
        <script type="text/javascript">
        	bkLib.onDomLoaded(function() { 
                nicEditors.allTextAreas() 
                });
        </script>
        
        
// <?php     
// include_once('db_connection.php');
// $res = mysqli_query("SELECT * FROM Page WHERE PageId=2");
// $row = mysqli_fetch_assoc($res);
// $value = $row["pageName"];      
// ?>
<form action="add.php" method="post">
<!--<textarea name="contain" id="contain" oninput="auto_grow(this)" ></textarea>-->
<textarea name="contain" id="contain"></textarea>
<input type="submit" value="Submit" name="submit">
</form>     

    </body>

</html>