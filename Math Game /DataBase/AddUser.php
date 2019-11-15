<?php
$servername = "localhost";
$username = "root";
$password = "Bigmac598";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Students (username, password)
VALUES ('$_GET[username]', '$_GET[psw]')";

if ($conn->query($sql) === TRUE) {
    header( "Refresh:3; Location: ../index.html", true, 303);
    //header('Refresh:3; Location: ../index.html');
    echo "Account Created Succesfully";
    
    exit;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
