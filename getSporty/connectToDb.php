<!---developed by Ayaulym Chinaliyeva--->
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$category = $_POST['select'];
$serial = $_POST['serial'];

$sql = "INSERT INTO `getsporty`.`orders` (`Name`, `Last name`, `Phone number`, `E-mail`, `Category`, `Serial number`) VALUES ('$name', '$lname', '$phone', '$email', '$category', '$serial');";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    header("Location: mainPage.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>