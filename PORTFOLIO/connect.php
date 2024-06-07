<?php
$servername = "localhost";
$name = "name";
$email = "email";
$number = "number";
$messages = "messages";
$mishra = "mishra";

$conn = new mysqli($servername, $name, $email, $number, $messages, $mishra);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE ayush3(
    name varchar(250) , 
    email VARCHAR(200) NULL,
    number int(10)  NULL,
    messages VARCHAR(500)
    )";
if ($conn->query($sql) === TRUE) {
    echo "table ayush3 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>