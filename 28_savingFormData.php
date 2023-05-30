<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Data in MySQL from PHP</title>
    <style>
        input, textarea, button{
            width: 200px;
            padding: 10px;
            border-radius: 20px;
            border: 2px solid #26262655;
            margin: 5px;
            align: center; 
            font-family: Poppins;
        }
    </style>
</head>
<body>

<?php

$host = 'localhost';
$user = 'root';
$pass = '0003';
$db = 'vibhu';

// Creating a connection
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("An Error Occoured: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $concern = $_POST['concern'];
    
    $sql = "INSERT INTO `details` (`name`, `email`, `concern`) VALUES ('$name', '$email', '$concern')";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "<script>alert('Data Inserted Successfully.')</script>";
    }

}

?>

    <form action="/vibhu/28_savingFormData.php" method="post">
        <input type="text" name="name" placeholder="Enter Full Name"><br>
        <input type="text" name="email" placeholder="Enter Full Name"><br>
        <textarea name="concern" cols="30" rows="5"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>