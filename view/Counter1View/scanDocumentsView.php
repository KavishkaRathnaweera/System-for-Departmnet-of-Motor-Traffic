<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>Counter 2</title>
    <link rel="icon" href="../images/3.png">
    <link rel="stylesheet" href="../css/biometrics.css">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <main class="container">
        <div class="applicant_id_box">
            <label>Applicant ID:</label>
            <input type="text" id="applicant_id" value="<?php echo $_SESSION["C1nic"] ?>" disabled>
        </div>
        <div class="biometrics_box">
            <input type="image" id="photo" src="../images/3.png" disabled>
        </div>

        <div class="button_box">
            <input type="text" id="message" disabled value="<?php echo "Please Connect  Camera Scanner" ?>"><br>

            <button id="back_btn" onclick="la('../Counter1View.php')">back</button>
            <button id="scan_btn" onclick="">scan</button>
            <button id="save_btn" onclick="">save</button>
            <button id="delete_btn" onclick="">delete</button>
            <script>
                function la(src) {
                    window.location = src;
                }
            </script>
        </div>

    </main>



    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>

</html>