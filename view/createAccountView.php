<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/createAccount.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Create New Account</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" type="text/css" href="css/createAccount.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="js/createAccountjs.js"></script>
 
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" class="button1" onclick="la('../index.php')">Back</button>
    <h1>Create new account</h1>
    <br>
    <div>
        <h2><?php if(isset($_POST["submit"])){
            if(empty($array1) && empty($array2)){
            echo("You have successfully created your Account. Please refer Email to further details");} }?></h2>
    </div>
    <main class="container">
    <form action="createAccountView.php" id="userDetails" class="userform" method="post">
        <p>
            <label for="">ID no : </label>
            <input type="text" name="id_no" id="a" placeholder="Enter id or passport number(must be correct)" required>
        </p>
        <p>
            <label for="">Surname: </label>
            <input type="text" name="surname" placeholder="Enter surname in Capital block letters" required>
        </p>
        <p>
            <label for="">Other Names(optional) : </label>
            <input type="text" name="other_names" placeholder="Enter other names in Capital block letters">
        </p>
        <p>
            <label for="">Full name : </label>
            <input type="text" name="full_name" placeholder="Enter Full name in Capital block letters" required>
        </p>
        <p>
            <label for="">Sex : </label>
            <input type="radio" name="grp1" value="Male" required>Male</input>
            <input type="radio" name="grp1" value="Female" required>Female</input>
        </p>
        <p>
            <label for="">Date of Birth : </label>
            <input type="date" name="date" placeholder="Enter birthday" required>
        </p>
        <p>
            <label for="">Age : </label>
            <input type="number" min="18" max="65" name="age" placeholder="Enter age" required>
        </p>
        <p>
            <label for="">Height(cm) : </label>
            <input type="number" name="height" placeholder="Enter height" required>
        </p>
        <p>
            <label for="">Blood Group : </label>
            <select  name="blood">
                <option value="O Negative">O Negative</option>
                <option value="O Positive">O Positive</option>
                <option value="A Negative">A Negative</option>
                <option value="A Positive">A Positive</option>
                <option value="B Negative">B Negative</option>
                <option value="B Positive">B Positive</option>
                <option value="AB Negative">AB Negativ</option>
                <option value="AB Positive">AB Positive</option>
            </select>
            <!--<input type="text" name="blood_group" required>-->
        </p>
        <p>
        <label for="">Vehical Class : </label>
            <select  name="vehicle">
                <option value="Motor cycle(Auto)">Motor cycle(Auto)</option>
                <option value="Motor cycle(Manual)">Motor cycle(Manual)</option>
                <option value="Motor Tricycle">Motor Tricycle</option>
                <option value="Motor Vehicle(Auto)">Motor Vehicle(Auto)</option>
                <option value="Motor Vehicle(Manual)">Motor Vehicle(Manual)</option>
                <option value="Motor cycle(Auto),Motor Tricycle">"Motor cycle(Auto),Motor Tricycle</option>
                <option value="Motor cycle(Auto),Motor Vehicle(Auto)">Motor cycle(Auto),Motor Vehicle(Auto)</option>
                <option value="Motor cycle(Auto),Motor Vehicle(Manual)">Motor cycle(Auto),Motor Vehicle(Manual)</option>
                <option value="Motor cycle(Manual),Motor Tricycle">Motor cycle(Manual),Motor Tricycle</option>
                <option value="Motor cycle(Manual),Motor Vehicle(Auto)">Motor cycle(Manual),Motor Vehicle(Auto)</option>
                <option value="Motor cycle(Manual),Motor Vehicle(Manual)">Motor cycle(Manual),Motor Vehicle(Manual)</option>
                <option value="Motor Tricycle,Motor Vehicle(Auto)">Motor Tricycle,Motor Vehicle(Auto)</option>
                <option value="Motor Tricycle,Motor Vehicle(Manual)">Motor Tricycle,Motor Vehicle(Manual)</option>
                <option value="Motor cycle(Auto),Motor Tricycle,Motor Vehicle(Auto)">Motor cycle(Auto),Motor Tricycle,Motor Vehicle(Auto)</option>
                <option value="Motor cycle(Auto),Motor Tricycle,Motor Vehicle(Manual)">Motor cycle(Auto),Motor Tricycle,Motor Vehicle(Manual)</option>
                <option value="Motor cycle(Manual),Motor Tricycle,Motor Vehicle(Manual)">Motor cycle(Manual),Motor Tricycle,Motor Vehicle(Manual)</option>
                <option value="Motor cycle(Manual),Motor Tricycle,Motor Vehicle(Manual)">Motor cycle(Manual),Motor Tricycle,Motor Vehicle(Manual)</option>
            </select>
        </p>
        <p>
            <label for="">Permanent Address : </label>
            <input type="text" name="address" placeholder="Enter valid address" required>
        </p>
        <p>
            <label for="">Phone Number : </label>
            <input type="number" name="phone_number" placeholder="Enter phone number" required >
        </p>
        <p>
            <label for="">Email Address : </label>
            <input type="email" name="email" placeholder="Enter valid email address" required>
        </p>
        <p>
            <label for="">New Password : </label>
            <input type="text" name="password" placeholder="Enter new password" required>
        </p>
        <p>
            <label for="">Password Confirmation : </label>
            <input type="text" name="passwrdr" placeholder="Retype new password" required>
        </p>
        <p>
            <label for="">&nbsp;</label>
            <button type="button" name="subt" onclick="Validate()" >save</button>
            <button type="button" id='id2'  onclick='UpdateDetails()' disabled >Update Details</button>
            <button type="submit" name="submit" id="id1" disabled>create account</button>
            
        </p>
        <p>
       
        
        
        </p>

        <!--<button type="submit" class="btn btn-primary" name="update" onclick='return confirm("Are You Sure?");'>Update Password</button>--onclick="Validate()"-->

    </form>
    
    </main>
   
    <script>function la(src)
    {
     window.location=src;
    }
</script>
    <!--<button  id ="sub" name="subt" onclick="Validate()" >save</button>
    <button id='id1'  onclick='UpdateDetails()' disabled>Update Details</button>-->
    
    <br>
    <!-- <pre>
    <div id ="demo">
    </div>
    </pre> -->

    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>
</html>