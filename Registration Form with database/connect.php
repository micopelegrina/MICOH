<?php
    $fullname = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    

    $conn = new mysqli('localhost', 'root',',test');
    if($conn->connect_errord){
        die('Connection Failed  : '.$conn->connection_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullName, username, email, phoneNumber, password, confirmPassword)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $fullname, $username, $email, $phoneNumber, $password, $confirmPassword);
        $stmt->execute();
        echo "registration Successfully...";
        $stmt->close;
        $conn->close;

    }
?>



