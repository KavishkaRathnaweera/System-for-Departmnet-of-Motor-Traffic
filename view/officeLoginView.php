<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/office.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Office Login</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="js/createAccountjs.js"></script>
 
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <h1>Office Login</h1>
    <br>
    
    <strong><div id ="demo"> <?php 
    if(isset($error[0])){
        print($error[0]);
    }
    ?> </div>
</strong>
    
    <form action="officeLoginView.php" id="loginDetail" class="loginForm" method="post">
    <fieldset>
        <p>
            <label for="">Officer ID : </label>
            <input type="text" name="id_no" id="a" required>
        </p>
        <p>
            <label for="">Password : </label>
            <input type="password" name="password" required>
        </p>
      
        <p>
            <label for="">&nbsp;</label>
            <button type="submit" name="login">LogIn</button>
            <button type="button" name="cancel" id="id1" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">Cancel</button>

        </p>
        </fieldset>

        <!--<button type="submit" class="btn btn-primary" name="update" onclick='return confirm("Are You Sure?");'>Update Password</button>--onclick="Validate()"-->

    </form>
    

    
    <!--<button  id ="sub" name="subt" onclick="Validate()" >save</button>
    <button id='id1'  onclick='UpdateDetails()' disabled>Update Details</button>-->
    
    <br>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>
</html>