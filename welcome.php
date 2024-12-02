<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
        }
        .container {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            /* boz shadow */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            animation: fadeIn 2s;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        form {
            display: inline-block;
        }
        button {
            background-color: #ff7f50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s;
        }
        button:hover {
            transform: scale(1.1);
            background-color: #ff4500;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">

        <img src="<?php echo 'images/' . $_SESSION['img_name']; ?>" alt="" >
        <!-- <img src="img/ui.jpeg" alt=""> -->


        <h1>Welcome 
        <?php 
         echo  '(' . ucwords( $_SESSION['username'] ).')';
        ?>    
        to Your Dashboard!</h1>
        <p>Thank you for signing up! Explore your new journey and make the most of your experience.</p>
        <form action="signup.html">
            <label for="">Want to sign up again or revisit? Click below!</label><br><br>
            <button>Go to Signup</button>
        </form>
    </div>
</body>
</html>


<?php

session_unset();
session_destroy();

?>
