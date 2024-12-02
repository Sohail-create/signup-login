
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_info";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Error" . mysqli_connect_error());
}

$sql = "SELECT * FROM `user_data`";
$result = mysqli_query($conn, $sql);

$email = $_POST['email'];
$password = $_POST['password'];


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $user_email = $row["Email"];
        $user_password = $row["Password"];
    }

    if ($email == $user_email && $password == $user_password) {
        // Login successful
        header("location: welcome.php");

    } else {
       header("location: oops.html");
        
    }
    // $fetch = mysqli_fetch_assoc($result);


} else {
    die("Error" . mysqli_error($conn));
}
;

