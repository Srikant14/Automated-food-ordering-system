<?php 
define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'manager');
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 
   $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
    $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 

    
if(isset($_POST['t2']))
{
	 $ga =$_POST['number'];
      $gb =$_POST['text'];
       $gc =$_POST['quantity'];
    $gd =$_POST['value'];
$query= "INSERT INTO  eg (itemno,itemname,quantity,price)  VALUES('$ga','$gb','$gc','$gd')";


mysqli_query($con,$query);
}
//get results from database
$result = mysqli_query($con,"SELECT * FROM eg") or die("FAAAA");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="container">
        <tr class="row">'; 
        //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->itemno. '</td>';  //get field name for header
    array_push($all_property, $property->itemno);  //save those to array

}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";

/*if($data)
{
echo "OKay";
}
else
{
echo "NOT okay.";
}

}*/
 ?>

<!DOCTYPE html>
<html >
<head>
<link href="mana.css" type="text/css" rel="stylesheet"/>
<title>HEY</title>
</head>
<body>

</head>
<body>

<ul id="navigation">

 <li><a href="#">Back</a></li>
 <li class="sub">
 
   <div class="search" > <input type="text" name="search" placeholder="Search..">
  
  
 </li>
 
 <li style="float: right;">
  <a href="#">Logout</a>
 </li>

</ul>
<h1><B>UPDATED MENU</B>
</h1>

<form action="ab.php" method="POST">
<table class="container">
	
  <th>CHINESE</th>
</tr>
    
  <tr>
    <th>Item no.</th>
    <th>Item name</th>
    <th>Total quantity</th>
    <th>Unit price</th>
  </tr>
 
  <tr class="row">
     <td><input type="text" name="number" ></td>
      <td><input name="text" type="text" value=""></td>
      <td><input name="quantity" type="text" value=""></td>
      <td><input name="value" type="text" value=""></td>
  </tr>
 <input name="t2" type="submit" value="Submit">
</form>
</body>
</html>


