<?php
    $user = "example_user";
    $password = "#Anuran123";
    $conn = new mysqli("127.0.0.1:3306", $user, $password);

    $createDBquery = array(
        "CREATE DATABASE example_database",
        "USE example_database",
    );

    $flag = 0;
    foreach($createDBquery as $query) {
        $result = mysqli_query($conn,$query);

        if (!$result) {
            print($conn->error."<br>");
            ++$flag;
        }

        if ($flag == 0) {
            print("DB and Tables created successfully!");
        }
    }
?>