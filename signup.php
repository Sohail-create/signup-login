
<?php
session_start();
        // Database
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_info";

        $conn = mysqli_connect($server, $username, $password, $dbname);

        if (!$conn) {
            die("Error" . mysqli_connect_error());
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $img_data = $_POST['img_data'];
        $img_name = $_FILES['img_data']['name'];
        $img_tmp = $_FILES['img_data']['tmp_name'];

        $location = "images/";
        move_uploaded_file($img_tmp, $location.$img_name);

       // session work here
       
       $_SESSION['username']=$fname;
       $_SESSION['img_name']=$img_name;


        $sql = "INSERT INTO `user_data`(`First Name`, `Last Name`, `Email`, `Password`, `img_data`) VALUES ('$fname','$lname','$email','$password','$img_name')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Erorr in (SQL) Query";
        }else{
            header("location:login.html");
        };

        ?>

