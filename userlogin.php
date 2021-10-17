<?php
    $email = $_POST['email'];
    $password = $_POST['Password'];

    $pass = MD5($password);

    if (!empty($email) || !empty($password)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "leckerpizza";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        $sql = "SELECT Password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $pwFromDB = $row['Password'];
        }

        if ($pwFromDB == $pass) {
            header('Location: index - Copy.php');
        } else {
            echo "Wrong credentials.";
        }
    }
?>