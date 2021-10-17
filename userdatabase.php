<?php
    $username = $_POST['username'];
    $email = $_POST['email'];

    if (!empty($username) || !empty($email)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "leckerpizza";

        //Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        
        //Send an email
        $recipient = "atharvakapile1156@gmail.com";
        $subject = "New subscription form $username";
        $email_content = "Name: $username\n";
        $email_content .= "Email: $email\n";

        $email_headers = "From: $username <$email>";

        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From sub Where email = ? Limit 1";
            $INSERT = "INSERT Into sub (username, email) values(?,?)";

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
                $stmt->bind_param("ss", $username, $email);
                $stmt->execute();
                header("Location: http://localhost/pbldatabase/index.php?success=1#form");
            } else {
                header("Location: http://localhost/pbldatabase/index.php?success=-1#form");
                exit;
            }
            $stmt->close();
            $conn->close();
        }
        mail($recipient, $subject, $email_content, $email_headers);
    }
?>