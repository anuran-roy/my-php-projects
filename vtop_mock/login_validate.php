<?php
    $user = "example_user";
    $password = "#Anuran123";
    $database = "example_database";
    $table = "vtop_mock_users";
    
    $conn = new mysqli("127.0.0.1:3306", $user, $password, $database);

    $given_username = $_POST["usernameInput"];
    $given_password = $_POST["passwordInput"];

    $query = "SELECT password_hash FROM vtop_mock_users WHERE username='$given_username' OR email='$given_username'";
    $result = mysqli_query($conn, $query);

    // print($result);
    print($conn->error);
    foreach (mysqli_query($conn, $query) as $row) {
        if (password_verify($given_password, $row['password_hash'])) {
            print("Successfully logged in!");
        }
        else {
            print("Invalid credentials!");
        }
    }
?>