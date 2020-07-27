

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Attendance</title>
    <link rel="stylesheet" type="text/css" href="css/cashier.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/3.png">
    
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="button1" onclick="la('../index.php')">LOGOUT</button>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="navbar">

  <a href=>Make Payment</a>
  <a href='CashierView/examPay.php'>Add Exam List</a>
  <a href="CashierView/trialPay.php">Add Trial List</a>

</div>
<h1 class="head">Examinar-Attendance Sheet</h1>

    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>