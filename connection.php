<?php
$servername = "locahost";
$username = "root";
$password = "";
$dbname = "studentdatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "COnnection completed";
}
else
{
    echo "Connection failed";
}


// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $contactNumber = $_POST['contactNumber'];
// $address = $_POST['address'];
// $registrationDate = $_POST['registrationDate'];

// //database connection
// $conn = new mysqli('localhost','root','','studentdatabase');
// if($conn->connect_error){
//     die('Connection Failed : '$conn->connect_error);
// }else {
//     $stmt = $conn->prepare("insert into registration(fname, lname, email, contactNumber, address, registrationDate) values(?, ?, ?, ?, ?, ?, ?)");
//     $stmt->bind_param("sssisi",$fname, $lname, $email, $contactNumber, $address, $registrationDate);
//     $stmt->execute();
//     echo "Registration Successfully Done.";
//     $stmt->close();
//     $conn->close();
// }

?>
