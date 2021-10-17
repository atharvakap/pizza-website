<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $pass = md5($password);

    if (!empty($email) || !empty($password) || !empty($re_password)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "leckerpizza";

        //Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        } else if ($password != $re_password) {
            header("Location: Log in.php");
        }else {
            $SELECT = "SELECT email From user Where email = ? Limit 1";
            $INSERT = "INSERT Into user (email, password) values(?,?)";

             //Prepare statement
             $stmt = $conn->prepare($SELECT);
             $stmt->bind_param("s", $email);
             $stmt->execute();
             $stmt->bind_result($email);
             $stmt->store_result();
             $rnum = $stmt->num_rows();

             if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ss", $email, $pass);
                $stmt->execute();
                header("Location: Log in.php");
            } else {
                echo "Oopps! The email already exists";
            }
            $stmt->close();
            $conn->close();
        } 
    } else {
        echo "All fields are required";
        die();
    }
?>