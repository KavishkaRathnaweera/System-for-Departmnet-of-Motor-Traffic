<?php include("includes/loginView.inc.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>User Login</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/createAccount.css">
    <script type="text/javascript" src="js/createAccountjs.js"></script>
 
</head>
<body>
    <?php include("includes/header.php");  ?>
    <h1>User Login</h1>
    <br>
    
    <form action="loginView.php" id="loginDetail" class="loginForm" method="post">
    <fieldset>
        <p>
            <label for="">User ID : </label>
            <input type="text" name="id_no" id="a" required>
        </p>
        <p>
            <label for="">Password : </label>
            <input type="text" name="password" required>
        </p>
      
        <p>
            <label for="">&nbsp;</label>
            <button type="submit" name="login">LogIn</button>
            <button type="button" id='fogotPW' >Forgot Password</button>
            <button type="button" name="cancel" id="id1">Cancel</button>
        </p>
        </fieldset>

        <!--<button type="submit" class="btn btn-primary" name="update" onclick='return confirm("Are You Sure?");'>Update Password</button>--onclick="Validate()"-->

    </form>
    

    
    <!--<button  id ="sub" name="subt" onclick="Validate()" >save</button>
    <button id='id1'  onclick='UpdateDetails()' disabled>Update Details</button>-->
    
    <br>
    <div id ="demo"> <?php 
    if(isset($errors[0])){
        print($errors[0]);
    }
    ?> </div>

    <?php include("includes/footer.php");  ?>

</body>
</html>