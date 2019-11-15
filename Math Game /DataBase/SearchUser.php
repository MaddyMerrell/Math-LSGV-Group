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

$uname = $_POST['username'];
$pass  = $_POST['psw'];
$sql = "SELECT * FROM Students WHERE username='$uname'";

$qry   = mysqli_query($conn,$sql);
if(!$qry) {
    die("Query Failed: ");
} else {

    $row=mysqli_fetch_array($qry);

    if ($uname==$row['username']) {
         if($uname==$row['username'] && $pass==$row['password']) {
           header('Location: loginSystemTrue');
        }
        else {
            header('Location: loginSystemFalse');

        }
    }
}

// $user = $_POST['username'];
// $psw = $_POST['psw'];
//
// $query = "SELECT * FROM Students WHERE username = $user AND password = $psw";
// $result = mysqli_query($conn,$query);
//
// if ($result = true) {
//   echo $result;
// } else {
//   echo "Goodbye World";
// }

$txt = $_POST[username];
$txt2 = $_POST[psw];

// "SELECT * from Students WHERE username = '$_GET[username]'";
// $result = $conn->query($sql);
//
// "SELECT password FROM Students"
// print "hello";
?>
