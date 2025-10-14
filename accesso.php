<?php

$conn= new mysqli("localhost","root","","chat");

if($conn->connect_error)
    die("error");


$email=$_POST["email"];
$password=$_POST["passw"];

$sql="SELECT * FROM accessi WHERE email=? AND passw=? ";

$stmt= $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

$result= $stmt->get_result();

if($row= $result->fetch_assoc())
    header("Location: registrazioni.html");
else
    echo"errore";
$conn->close();










?>