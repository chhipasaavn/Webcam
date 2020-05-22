<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webcam";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$job = $_POST['job'];
$address = $_POST['address'];
$eid = $_POST['eid'];


$_SESSION['eid'] = $eid;





$sql = "insert into employeedata(firstname, lastname, phone, email, gender, maritalstatus, jobprofile, address, empid)
         values ('$fname', '$lname', '$phone', '$email', '$gender', '$status', '$job', '$address', '$eid')";

if (mysqli_query($conn, $sql)) {
    echo "Employee data saved successfully !!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>

<h2><a href="snapshot.php">Proceed to take snapshot...</a></h2>