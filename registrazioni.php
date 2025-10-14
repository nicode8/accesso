<?php

$conn= new mysqli("localhost","root","","chat");

if($conn->connect_error)
    die("errore");


$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$email=$_POST["email"];
$password=$_POST["passw"];


$sql="INSERT INTO accessi (nome,cognome,email,passw) VALUES (?,?,?,?)";

$stmt= $conn->prepare($sql);
$stmt-> bind_param("ssss", $nome, $cognome, $email, $password);

$stmt->execute();
    


$stmt->close();
$conn->close();
















?>