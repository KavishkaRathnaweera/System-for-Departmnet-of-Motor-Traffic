<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
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
    <button type="button" class="logout" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">LOGOUT</button>

    <main class="container">
        <div class="search_box">
            <form id="Search" action="permitCounterView.php#Search" method="post" class="searchform">
                <label>Applicant ID: </label>
                <input type="text" name="ID" id="ID_no" placeholder="Enter applicant id">
                <button type="submit" name="search" id="search_btn">search</button>
            </form>
            <input type="text" id="messagebar1" value="<?php if (isset($_SESSION["Perror"])) {
                                                            echo $_SESSION["Perror"];
                                                        } ?>" size="50" disabled>
        </div>

        <div class="applicantDetails_box">
            
            <h1>Applicant Details</h1>
            <label>Applicant ID : </label>
            <input type="text" value="<?php if (isset($_SESSION["Pnic"])) {
                                            echo $_SESSION["Pnic"];
                                        } ?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php if (isset($_SESSION["Pfullname"])) {
                                            echo $_SESSION["Pfullname"];
                                        } ?>" size="50" disabled><br><br>
            <label>Exam : </label>
            <input type="text" value="<?php if (isset($_SESSION["Pexam"])) {
                                            echo $_SESSION["Pexam"];
                                        } ?>" size="50" disabled><br><br>
            <label>Email : </label>
            <input type="text" value="<?php if (isset($_SESSION["Pemail"])) {
                                            echo $_SESSION["Pemail"];
                                        } ?>" size="50" disabled><br><br>
            <label>Trial Date : </label>
            <input type="text" value="<?php if (isset($_SESSION["PtrialDate"])) {
                                            echo $_SESSION["PtrialDate"];
                                        } ?>" size="50" disabled>
            <input type="text" id="messagebar2" value="<?php if (isset($_SESSION["Pmessage"])) {
                                                            echo $_SESSION["Pmessage"];
                                                        } ?>" size="50" disabled>

        </div>
        <div class="button_box">

            <form id="Button" action="permitCounterView.php#Button" method="POST">
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