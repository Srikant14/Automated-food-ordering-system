
<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'authentication');
  define('DB_USER','root'); 
  define('DB_PASSWORD',''); 



   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ; 



 
  function NewUser($con) { 
        $name = $_POST['usernamee']; 
         $email = $_POST['emaill']; 
         $password = $_POST['pwdd']; 
         $conpassword = $_POST['pwdd2'];
         $tel = $_POST['tell'];
            $sql = "SELECT * FROM users WHERE fullname = '$name'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>=1)
       {
        echo "<script type='text/javascript'>\n";
               echo "alert('NAME ALREADY EXIST...!!');\n";
                echo "</script>";
       }
     else
        { 
                   if($password==$conpassword){
           $query = "INSERT INTO users (fullname,password,email,mobileno,conpassword) VALUES ('$name','$password','$email',$tel,'$conpassword')";
          $data = mysqli_query ($con,$query);
            
           if($data) { 
             
              echo "<script type='text/javascript'>\n";
               echo "alert('YOUR REGISTRATION IS COMPLETED...');\n";
                echo "</script>";
                header("Location: http://localhost/cus/bayview1.php");
            //echo "YOUR REGISTRATION IS COMPLETED...";
            } 
            else
            {
               echo "<script type='text/javascript'>\n";
               echo "alert(' error registerch ');\n";
                echo "</script>";
            }
          }else{
            echo "<script type='text/javascript'>\n";
               echo "alert(' password did not match ');\n";
                echo "</script>";
          }
         } 
      
  } 

   function SignUp($con) { 
    $name1=$_POST['usernamee'];
    $email1= $_POST['emaill'];

      if(!empty($_POST['usernamee'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
      {  
          
        $count=0;
        $query = mysqli_query($con,"SELECT * FROM signin WHERE (fullname = '$name1' AND email = '$email1')");

      
        if ($count==0) {
          
          NewUser($con);
           } else 
           { 

             echo "<script type='text/javascript'>\n";
           echo "alert('SORRY...YOU ARE ALREADY REGISTERED USER...');\n";
            echo "</script>";
            //echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
             } 
      } 
      else
      {

         echo "<script type='text/javascript'>\n";
               echo "alert(' plkjhgfdsz ');\n";
                echo "</script>";
      }
  } 
  if(isset($_POST['signup'])) { 
  SignUp($con); 
  } 

            ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="signup1.css">

<style type="text/css">
  
 
body {
        background-color: #1F2739;
} 
h3{
    
    color: #4DC3FA;
    text-align: center;
    font-size: 50px;
}
.box{
    width: 30%;
    margin-left:450px;
background-color: transparent; 
border: 1px solid #185875;
    box-sizing: border-box;
    }

.line{
    background-color: transparent;
}
input[type3=text], select {
   
    width: 70%;
background-color: transparent;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 52px;
    color: white;
    display: inline-block;
    border: 1px solid #185875;
    box-sizing: border-box;
}
input[type4=password], select {
  
    width: 70%;
    background-color: transparent;
    padding: 12px 20px;
    margin: 8px 0;
    color: white;
    margin-left: 52px;
    display: inline-block;
    border: 1px solid #185875;
    box-sizing: border-box;
}
input[type5=password], select {
    
     width: 70%;
     background-color: transparent;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    margin-left: 52px;
    color: white;
    border: 1px solid #185875;
    box-sizing: border-box;
}
input[type6=email], select {
  
    width: 70%;
    background-color: transparent;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 52px;
    color: white;
    display: inline-block;
    border: 1px solid #185875;
    box-sizing: border-box;
}
input[type7=text], select {
   
     width: 70%;
     background-color: transparent;
    padding: 12px 20px;
    margin: 8px 0;
    color: white;
    margin-left: 52px;
    
    display: inline-block;
    border: 1px solid #185875;
    box-sizing: border-box;
}
button {
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    margin-left: 150px;
    text-align: center;
    cursor: pointer;
    width: 30%;
}



input[type=submit]:hover {
    background-color: darkgreen;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
</style>
<body>

<h3>WELCOME !!</h3>

<div class="box">
  <form action="signup.php" method="POST">

    <div class="line"><label for=" username"></label>
    <input placeholder="Username" type3="text" id="username" name="usernamee" /><br/></div>

    <div class="line"><label for="pwd"> </label>
    <input placeholder=" Create password" type="password" type4="password"  id="pwd" name="pwdd" /><br/></div>

    <div class="line"><label for="pwd"></label>
    <input placeholder="Confirm password" type="password" type4="password" id="pwd2" name="pwdd2" /><br/></div>
   
   
                <!-- You may want to consider adding a "confirm" password box also -->
                <div class="line"><label for="email"></label>
                <input placeholder="Email" type6="email" id="email" name="emaill" /><br/></div>
                <!-- Valid input types: http://www.w3schools.com/html5/html5_form_input_types.asp -->
                <div class="line"><label for="tel"> </label>
                <input placeholder="Mobile no." type7="text" id="tel" name="tell" /><br/></div>
     <button type="submit" class="signupbtn" name="signup">Sign Up</button>
  </form>
</div>

</body>
</html>