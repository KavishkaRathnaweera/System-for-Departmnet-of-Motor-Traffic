<?php

session_start();
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/ExamPaper.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for answer the exam paper"/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Exam Paper</title>
    <link rel="stylesheet" href="css/ExamPaper.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">

    <style>
#demo {
  height:50px;
  text-align: center;
  font-size: 30px;
  margin-top: 0px;
  color: rgb(65, 14, 14);
}
#dem {
    height:280px;
  text-align: center;
  font-size: 30px;
  margin-top: 0px;
  color: rgb(65, 14, 14);
  
}
</style>
  
 
 
</head>

<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<form action="loginSuccessView.php" id="logout" class="Logout" method="post">
<button type="submit" class="logout" name="button1" >LOGOUT</button>
</form>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="title">
    <h1 class="head">Exam Paper - Mortor Traffic Department</h1>
    <p id="demo"></p>
</div>






<script>
    //localStorage.clear();
    if ("<?php echo($_SESSION['userid']) ?>" in localStorage){
        var countDownDate = localStorage.getItem("<?php echo($_SESSION['userid']) ?>");
    }else{
        var countDownDate = new Date().getTime() + 120000;
        localStorage.setItem("<?php echo($_SESSION['userid']) ?>",parseInt(countDownDate));
    }
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
            
        if ((distance < 0) || "<?php echo((isset($_SESSION['examdone'])))?>") {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Exam is End!";
            document.getElementById("buttonAutomaticallySubmit").click();
        }
        
        
    }, 1000);
</script>









<?php
if(!(isset($_SESSION['examdone']))){
        if(isset($_SESSION['rand'])){
            $examppr->promptQuestion($_SESSION['rand']);
        }else{
            $_SESSION['rand']=$examppr->randamNumberArray();
            $examppr->promptQuestion($_SESSION['rand']);
        }
    }

?>


</div>
<?php
 if(isset($_SESSION['passState'])){ ?>
<div id ="dem" class="title"> <?php 
        print($_SESSION['passState']);
 ?> </div> <?php }
?>




<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>
</html>