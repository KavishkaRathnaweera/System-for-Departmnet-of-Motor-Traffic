<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/admin.inc.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Admin"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/3.png">
    <script type="text/javascript" src="js/admin.js"></script>
  
 
</head>
<body>
    <?php include("AllPageIncludes/header.php");  ?>
    <button type="button" class="button1" onclick="la('../index.php')">LOGOUT</button>
    <h1 class="head">ADMIN</h1>
    <br>
    <main class="container">
        <div class="details_box">
    <form action="AdminView.php#wait" id="wait" class="wait" method="post">
        
    <fieldset>
                <legend><h3>Wait List</h3></legend>
                <p>
                    <label for="">Date :</label>
                    <input type="Date" name="date1" id="date11" placeholder="Enter Date" value="<?php if(isset($_SESSION['inpdate'])){echo($_SESSION['inpdate']); }?>">
                    <button type="sumit" name="datebtn1" >Add Date</button>
                    <h4><?php if($checkdateW=="No"){echo("Date Already existes and Updated according to current limit");} ?></h4>
                </p>
                <p>
                    <label for=""> Set Limit :</label>
                    <input type="number" name="limit1" placeholder="Enter preson limit">
                    <button type="submit" name="limitbtn1">save</button>
                </p>
                <p>
                Current limit :
                <?php  $aa = $admin->getlimitwait1();
                         echo $aa; ?>
                </p>
                
    </fieldset>

    </form>

    <br>

    <form action="AdminView.php#exam" id="exam" class="exam" method="post">
        
    <fieldset>
                <legend><h3>Exam List</h3></legend>
                <p>
                    <label for="">Date :</label>
                    <input type="Date" name="date2" placeholder="date" value="<?php if(isset($_SESSION['inpdate1'])){echo($_SESSION['inpdate1']); }?>">
                    <button name="datebtn2">Add</button>
                    <h4><?php if($checkdateE=="No"){echo("Date Already existes and Updated according to current limit");} ?></h4>
                </p>
                <p>
                    <label for="">Set Limit :</label>
                    <input type="number" name="limit2" placeholder="Enter Person Limit">
                    <button name="limitbtn2">save</button>
                </p>
                <p>
                Current limit :
                <?php  $aa = $admin->getlimitexam1();
                         echo $aa; ?>
                </p>
                
    </fieldset>

    </form>
    <br>

    <form action="AdminView.php#trial" id="trial" class="trial" method="post">
        
    <fieldset>
                <legend><h3>Trial List</h3></legend>
                <p>
                    <label for="">Date :</label>
                    <input type="Date" name="date3" placeholder="date" value="<?php if(isset($_SESSION['inpdate2'])){echo($_SESSION['inpdate2']); }?>">
                    <button name="datebtn3">Add</button>
                    <h4><?php if($checkdateT=="No"){echo("Date Already existes and Updated according to current limit");} ?></h4>
                </p>
                <p>
                    <label for="">Set Limit :</label>
                    <input type="number" name="limit3" placeholder="Enter Person Limit">
                    <button name="limitbtn3">save</button>
                </p>
                <p>
                Current limit :
                <?php  $ab = $admin->getlimitTrial1();
                         echo $ab; ?>
                </p>
                
    </fieldset>

    </form>
    </div>
</main>

    <div id =""><?php 
    // if(isset($_GET["idate"])){
    //     echo ($_GET["idate"]);
    // }
    // else{
    //     echo("sdsdsd");
    // }
    ?>
    </div>
    
    <script>function la(src)
    {
     window.location=src;
    }
    </script>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>
</html>