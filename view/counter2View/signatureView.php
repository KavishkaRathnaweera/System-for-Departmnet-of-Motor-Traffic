<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Counter2"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<?php //session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>Counter 2</title>
    <link rel="icon" href="../images/3.png">
    <link rel="stylesheet" href="../css/biometriccs.css">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <main class="container">
        <div class="applicant_id_box">
            <label>Applicant ID:</label>
            <input type="text" id="applicant_id" value="<?php echo $_SESSION["C2nic"]?>" disabled>
        </div>
        <div class="biometrics_box">
            <input type="image" id="photo" src="../images/3.png"  disabled>
            <input type="text" id="message" disabled value="<?php echo " Please Connect Signature Scanner"?>" size="50px"><br>
        </div>

        <div class="button_box">

            
        <button id="back_btn" onclick="backButton()">Back</button>
            <button id="take_btn" onclick="">Take</button>
            <button id="save_btn" onclick="">Save</button>
            <button id="delete_btn" onclick="">Delete</button>
            <button id="cancle_btn" onclick="">Cancle</button>
        </div>

    </main>



    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
    <script type="text/javascript">
        function backButton() {
            document.location = "../counter2View.php";
        }
    </script>
</body>

</html>