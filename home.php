<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "salah";
$conn = mysqli_connect($host, $user, $pass, $db);
$res = mysqli_query($conn, "select * from employee");