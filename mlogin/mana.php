<!DOCTYPE html>
<html >
<head>
<link href="mana.css" type="text/css" rel="stylesheet"/>
<title>MANAGER</title>
</head>
<body>

<ul id="navigation">

 <li><a href="#">Back</a></li>
 <li class="sub">
 
   <div class="search" > <input type="text" name="search" placeholder="Search.."></div>
   </li>
   <li class="view">
    <a href="mana1.php" style="float: right;">VIEW ORDER</a>
  
  
 </li>
 

 <li style="float: right;">
  <a href="login.php" ><button type="submit" name="logout" >LOGOUT</button> </a>
      
 </li>

</ul>
<h1><B>BAYVIEW MENU</B>
</h1>
<?php 
define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'manager');
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 
   $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
    $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 

    
if(isset($_POST['update']))
{
$update_query="UPDATE menu SET itemno='$_POST[itemno]',itemname='$_POST[itemname]',quantity='$_POST[quantity]',price='$_POST[price]' WHERE itemno='$_POST[hidden]'";
   mysqli_query($con,$update_query);
}
$sql="SELECT * FROM menu ORDER BY itemno ASC";
$myData=mysqli_query($con,$sql);
 echo "<table class=container>
  <thead>
 <tr>
  <th><h1>INDIAN</h1></th>
</tr>
    <tr>
      <th><h1>Item no.</h1></th>
      <th><h1>Item name</h1></th>
     <th><h1>Total quantity</h1></th>
      <th><h1>  Unit price</h1></th>
      
    </tr>
  </thead>";
  while($record = mysqli_fetch_array($myData))
  {
     echo "<form action=mana.php method=POST>";
   echo "<tbody>";
    echo" <tr>";

    echo "<td>"."<input type=text name=itemno value=".$record['itemno'].">";
       echo "<td>"."<input type=text name=itemname value=".$record['itemname'].">";
        echo "<td>"."<input type=text name=quantity value=".$record['quantity'].">";
         echo "<td>"."<input type=text name=price value=".$record['price'].">";
          echo "<td>"."<input type=hidden name=hidden value=".$record['itemno'].">";
          echo "<td>"."<input type=submit name=update value=update. </td>";
          echo "</form>";
  }
  echo "</table";
  mysqli_close($con);
   ?>
  </body>
  </html>




