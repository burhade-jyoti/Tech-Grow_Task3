<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "haircon";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = htmlspecialchars($_POST['Username']);
    $Email  = htmlspecialchars($_POST['Email']);
    $Message = htmlspecialchars($_POST['Message']);

    // Using prepared statements to insert data safely
    $stmt = $con->prepare("INSERT INTO `salon_con`(`Username`, `Email`, `Message`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Username, $Email, $Message);

    if ($stmt->execute()) {
        header("location:contactformN.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
