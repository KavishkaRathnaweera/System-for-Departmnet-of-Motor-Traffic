<?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/includes/counter2.inc.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Counter2"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>Counter 2</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/counter2.css?v=<?php echo time(); ?>">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" class="logout" onclick="CounterTwoLogout()">LOGOUT</button>

    <main class="container">
        <div class="search_box">
            <form id="Search" action="counter2View.php#Search" method="post" class="searchform">
                <label>Applicant ID: </label>
                <input type="text" name="ID" id="ID_no" placeholder="Enter applicant id">
                <button type="submit" name="search" id="search_btn">search</button>
            </form>
            <input type="text" id="messagebar" value="<?php if (isset($_SESSION["C2error"])) {
                                                            echo $_SESSION["C2error"];
                                                        } ?>" size="50" disabled>
        </div>

        <div class="applicantDetails_box">

            <h1>Applicant Details</h1>
            <label>Applicant ID: </label>
            <input type="text" value="<?php if (isset($_SESSION["C2nic"])) {
                                            echo $_SESSION["C2nic"];
                                        } ?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php if (isset($_SESSION["C2fullname"])) {
                                            echo $_SESSION["C2fullname"];
                                        } ?>" size="50" disabled><br><br>
            <label>Verified: </label>
            <input type="text" value="<?php if (isset($_SESSION["C2verified"])) {
                                            echo $_SESSION["C2verified"];
                                        } ?>" size="50" disabled>

        </div>
        <div class="button_box">
            <script>
                var verify = "<?php echo $_SESSION["C2verified"] ?>";
            </script>
            <button type="button" id="signature_btn" onclick="Sbutton(verify)">Signature</button>
            <button type="button" id="Fprint_btn" onclick="Fbutton(verify)">Fingerprint</button>
            <button type="button" id="photo_btn" onclick="Pbutton(verify)">Photo</button>
        </div>

    </main>



    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
    <script type="text/javascript">
        function Sbutton(verified) {
            if (verified == "Yes") {
                document.location = "counter2View/signatureView.php";
            }
        }

        function Fbutton(verified) {
            if (verified == "Yes") {
                document.location = "counter2View/FprintView.php";
            }
        }

        function Pbutton(verified) {
            if (verified == "Yes") {
                document.location = "counter2View/photoView.php";
            }
        }

        function CounterTwoLogout() {
            document.location = "../index.php";
        }
    </script>
</body>

</html>