<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/permitCounter.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>Permit Counter</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/permitCounter.css">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" id="logout" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">LOGOUT</button>

    <main class="container">
        <div class="search_box">
            <form action="permitCounterView.php" method="post" class="searchform">
                <label>Applicant ID: </label>
                <input type="text" name="ID" id="ID_no" placeholder="Enter applicant id">
                <button type="submit" name="search" id="search_btn">search</button>
            </form>
            <input type="text" id="messagebar1" value="<?php if (isset($_SESSION["error"])) {
                                                            echo $_SESSION["error"];
                                                        } ?>" size="50" disabled>
        </div>

        <div class="applicantDetails_box">
            
            <h1>Applicant Details</h1>
            <label>Applicant ID : </label>
            <input type="text" value="<?php if (isset($_SESSION["nic"])) {
                                            echo $_SESSION["nic"];
                                        } ?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php if (isset($_SESSION["fullname"])) {
                                            echo $_SESSION["fullname"];
                                        } ?>" size="50" disabled><br><br>
            <label>Exam : </label>
            <input type="text" value="<?php if (isset($_SESSION["exam"])) {
                                            echo $_SESSION["exam"];
                                        } ?>" size="50" disabled><br><br>
            <label>Email : </label>
            <input type="text" value="<?php if (isset($_SESSION["email"])) {
                                            echo $_SESSION["email"];
                                        } ?>" size="50" disabled><br><br>
            <label>Trial Date : </label>
            <input type="text" value="<?php if (isset($_SESSION["trialDate"])) {
                                            echo $_SESSION["trialDate"];
                                        } ?>" size="50" disabled>
            <input type="text" id="messagebar2" value="<?php if (isset($_SESSION["message"])) {
                                                            echo $_SESSION["message"];
                                                        } ?>" size="50" disabled>

        </div>
        <div class="button_box">

            <form action="permitCounterView.php" method="POST">
                <button type="submit" name="trialDate" id="trialDate_btn">trial date</button>
                <button type="submit" name="UpdateList" id="updateTrialList_btn">update trialList</button>
                <button type="submit" name="print" id="print_btn">print</button>
                <button type="submit" name="sendEmail" id="sendEmail_btn">send email</button>

            </form>
        </div>

    </main>



    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>

</html>