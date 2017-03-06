<?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['Username']))
    {
    
    $username = stripslashes($_REQUEST['Username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $password = stripslashes($_REQUEST['Password']);
    $password = mysqli_real_escape_string($con,$password);
    
  //Checking is user existing in the database or not
        $query = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
      $_SESSION['Username'] = $username;
      //echo "<a href="C:\Users\HP\Desktop\Mini_Project\Manager\View"> <p class="submit"><input type="submit" name="commit" value="Login"></p></a>";
        echo "<script type='text/javascript'>\n";
               echo "alert('LOGIN SUCCESSS....!!');\n";
                echo "</script>";// Redirect user to index.php
                 header("Location: http://localhost/mlogin/mana.php");
            }else{
         echo "<script type='text/javascript'>\n";
               echo "alert('INCORRECT Username or Password..!');\n";
                echo "</script>";
        }
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<h1>BAY VIEW</h1>
  <section class="container">
    <div class="login">
      <h1>Manager Login</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="Username" value="" placeholder="username"></p>
        <p><input type="password" name="Password" value="" placeholder="password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
       <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
  </section>

  
</body>
</html>