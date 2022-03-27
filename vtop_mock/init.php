<?php
    $user = "example_user";
    $password = "#Anuran123";
    $database = "example_database";
    $table = "vtop_mock_users";

    $conn = new mysqli("127.0.0.1:3306", $user, $password, $database);

    $query = "CREATE TABLE vtop_mock_users (
        username VARCHAR(255) UNIQUE,
        regno VARCHAR(10) UNIQUE,
        email VARCHAR(255) UNIQUE,
        password_hash VARCHAR(255),
        contact VARCHAR(15),
        dob DATE
    )";

    $result = mysqli_query($conn, $query);
    
    if ($result) {
        print("Table $table created successfully!<br>");
    } else {
        print("Table $table could not be created. Error Log:<br>".$conn->error);
    }

?>