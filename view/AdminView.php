<?php include("includes/admin.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Admin</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/createAccount.css">
    <script type="text/javascript" src="js/admin.js"></script>
 
</head>
<body>
    <?php include("AllPageIncludes/header.php");  ?>
    <h1>ADMIN</h1>
    <br>
    
    <form action="AdminView.php" id="wait" class="wait" method="post">
        
    <fieldset>
                <legend><h1>Wait List</h1></legend>
                <p>
                    <label for="">Date :</label>
                    <input type="Date" name="date1" id="date11" placeholder="Enter Date" value="<?php if(isset($_SESSION['inpdate'])){echo($_SESSION['inpdate']); }?>">
                    <button type="sumit" name="datebtn1" >Add Date</button>
                    <h4><?php if($checkdateW=="No"){echo("Date Already existes");} ?></h4>
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

    <form action="AdminView.php" id="exam" class="exam" method="post">
        
    <fieldset>
                <legend><h1>Exam List</h1></legend>
                <p>
                    <label for="">Date :</label>
                    <input type="Date" name="date2" placeholder="date" value="<?php if(isset($_SESSION['inpdate'])){echo($_SESSION['inpdate1']); }?>">
                    <button name="datebtn2">Add</button>
                    <h4><?php if($checkdateE=="No"){echo("Date Already existes");} ?></h4>
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
    <div id =""><?php 
    // if(isset($_GET["idate"])){
    //     echo ($_GET["idate"]);
    // }
    // else{
    //     echo("sdsdsd");
    // }
    ?>
    </div>

    <?php include("AllPageIncludes/footer.php");  ?>

</body>
</html>