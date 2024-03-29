<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEES</title>
<link rel="stylesheet" href="style.css">

</head>
<body dir="rtl">

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "salah";
$conn = mysqli_connect($host, $user, $pass, $db);
$res = mysqli_query($conn, "select * from employee");
$id = "";
$name = "";
$address = "";

if (isset($_POST["id"])) {
    
$id = $_POST["id"];

}

if (isset($_POST["name"])) {

    $name = $_POST["name"];


}

if (isset($_POST["address"])) {

    $address = $_POST["address"];


}
$sqls = "";

if (isset($_POST["add"])) {
   
    $sqls = "insert into employee value ($id,'$name','$address')";

mysqli_query($conn, $sqls);


header("location: home.php");


}

if (isset($_POST["del"])) {


$sqls = "delete from employee where name ='$name'";

mysqli_query($conn, $sqls);

header("location: home.php");

}






?>
    

<div id="Father">

    <form method="POST">

<aside>
<div id="div">

    <img src="sss.jpg" alt="logo of WEBSITE">
<h3>Employee details</h3>

<label>Employee Nnmber:</label><br>
<input type="text" name="id" id="id"><br>

<label>Employee Name:</label>
<input type="text" name="name" id="name"><br>

<label>Employee address: </label><br>
<input type="text" name="address" id="address">

<button name="add">Add Employee</button>
<button name="del">Delete Employee</button>
</div>


</aside>

<main>
<table id="tbl">

    <tr>

        <th>Serial Number</th>
        <th>Employee Name</th>
        <th>Employee address</th>

    
    </tr>

<?php

while ($row = mysqli_fetch_array($res)) {
    echo"<tr>";
    echo"<td>".$row['id']."</td>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['address']."</td>";
    echo"</td>";
}





?>



</table>

</main>



    </form>


</div>



</body>
</html>