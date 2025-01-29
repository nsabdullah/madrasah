<?php
// conneted with data base
$server = "localhost";
$user = "root";
$password = "";
$db_name = "users";

$conn = mysqli_connect($server, $user, $password, $db_name);  
 $sql = "INSERT INTO myproject (name, username, email, password) VALUES ('$_POST[name]', '$_POST[username]', '$_POST[email]', '$_POST[password]')";

$data = mysqli_query($conn, $sql);


if($data){
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #4caf50, #81c784);
            color: #fff;
        }
        .success-container {
            text-align: center;
            background: #fff;
            color: #4caf50;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .success-container h1 {
            font-size: 2rem;
            margin: 0;
        }
        .success-container p {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .success-container .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .success-container .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Success!</h1>
        <p>Your account has been creatted successfully.</p>
        <a href="index.php" class="btn">Go to Home</a>
    </div>
</body>
</html>


<?php
}


?>