<!DOCTYPE html>
<html>
 <Head>
   <Title>Department of Motor traffic in Sri Lanka</title>
    <meta name="description" content="This website to renew your licence or get a new licence and office uses only."/>
    <meta name="keywords" content="Department of Motor traffic in Sri Lanka"/>
    <link rel="icon" href="view/images/3.png">
    <link rel="stylesheet" href="view/css/home.css">
 </Head>
   
 <Body>
 <header>
      <img src="view/images/6.jpg" width="100%" alt ="motor traffic department picture." >    
</header>



   
   <select id="gh" name="offctype" onchange="la('view/officeLoginView.php')">
    <option value="home.html">Customer</option>
    <option value="counter1.html">Counter 1</option>
    <option value="counter2.html">Counter 2</option>
    <option value="cashier.html">Cashier</option>
    <option value="examinar.html">Examinar</option>
    <option value="licence_counter.html">licence counter</option>
    <option value="permit_counter.html">Permit counter</option>
    <option value="AdminView.html">Admin</option>
</select> 

<script>function la(src)
{
  window.location=src;
}
</script>

   <H1>Home Page</H1> 
   <hr/>
   <img src="view/images/4.jpg" width="200px" height="120px" alt ="log in" usemap="#map0"/> ...................OR.....................               
   <img src="view/images/5.jpg" width="200px" height="120px" alt ="sign up" usemap="#map1"/>
  
 

 

  

   <p style="color:black;font-size: 20px;" ><b>To reduce the time waste of the department of motor traffic here is your new home page.<br><br>
    This site will help you to reserve a date to your pre examination. First you should have a DMT account to get dates.<br><br>
    If you already have an account click log in to check updates and your account status.<br><br>
    There are 2 main servises from this site.</b>
    <ol><li>Get a new driving licence</li><li>Renew driving licence</li></ol>
   </p>

   <?php include("view/includes/footer.php"); ?>

   <map name="map0">
    <area shape="rect" coords="0,0,200,120" href="view/loginView.php"/>
    </map>
   <map name="map1">
   <area shape="rect" coords="0,0,200,120" href="view/createAccountView.php"/>
   </map>

   
 </body>
</html>