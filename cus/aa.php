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

<form method="POST">
<table class="container">
	<thead>
     <tr>
  <th><h1>INDIAN</h1></th>
</tr>
		<tr>
			<th><h1>Item no.</h1></th>
			<th><h1>Item name</h1></th>
			<th><h1>Total quantity</h1></th>
			<th><h1>	Unit price</h1></th>
      
		</tr>
	</thead>
	<tbody>
		<tr>

    <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
		<tr>
     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
		<tr>
     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
    
    <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
   <tr>
        <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
    <tr>
  <th>CHINESE</th>
</tr>
    
  <tr>
    <th>Item no.</th>
    <th>Item name</th>
    <th>Total quantity</th>
    <th>Unit price</th>
  </tr>
  <tr>

    <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
  <tr>
     <td><input  name="aa" type="text" value=""></td>
      <td><input name="ab" type="text" value=""></td>
      <td><input name="ac" type="text" value=""></td>
      <td><input name="ad" type="text" value=""></td>
  </tr>
   <tr>
     <td><input  type="text" value=""></td>
      <td><input  type="text" value=""></td>
      <td><input  type="text" value=""></td>
      <td><input  type="text" value=""></td>
  </tr>
   <tr>
  <th>BIVERAGES</th>
</tr>
     <tr>
     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
  <tr>

     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
  <tr>
     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
  <tr>
     <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
      <td><input type="text" value=""></td>
  </tr>
	</tbody>
</table>
<input type= "submit" name="t2" name="Sub">
</form>
</body>
</html>


<?php 
define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'manager');
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 
   $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
    $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
     $ga =$_POST['aa'];
      $gb =$_POST['ab'];
       $gc =$_POST['ac'];
    $gd =$_POST['ad'];
if(isset($_POST['t2']))
{
$query= "INSERT INTO  menu (itemno,itemname,quantity,price)  VALUES($ga,$gb,$gc,$gd)";
$data=mysqli_query($con,$query);
if($data)
{
echo "OKay";
}
else
{
echo "NOT okay.";
}

}
 ?>