<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{ 
die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO data (Value,Data) VALUES (?, ?)");
$stmt->bind_param("sss", $value1, $data1);

$value1 = "Name";
$data1 = "Asra";
$stmt->execute();


$value1 = "University";
$data1 = "Suuur IBA";
$stmt->execute();


$value1 = "Major";
$data1 = "Software Engineering";
$stmt->execute();


$value1 = "Native";
$data1 = "Sukkur";
$stmt->execute();

$value1 = "Experience";
$data1 = "2 Years";
$stmt->execute();


$value1 = "Projects";
$data1 = "10";
$stmt->execute();

$stmt->close();

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "projects";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{ 
die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO projects (data) VALUES (?)");
$stmt->bind_param("sss", $data);

$data = "Angular The big picture (Joe Eames) ";
$data = " Introduction To Python ";
$data = "Graphic DesigingGraphic Desiging";
$data = "Build Your First Android App";
$data = "How Google Does Machine Learning ";
$data = "Hotel Management System ";
$data = "Test Conductor ";
$data = "Snake Xienia ";
$data = "Payment Integration ";

$stmt->close();

$conn->close();
?> 
