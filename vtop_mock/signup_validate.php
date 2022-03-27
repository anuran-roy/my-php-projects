<?php
    function userExists($connection, $table, $username, $email) {
        $query = "SELECT * FROM $table WHERE username='$username' OR email='$email'";
        $result = mysqli_query($connection, $query);
        // print($query);
        // print(var_dump($result));
        // print("\n<br>Number of existing users found: ".mysqli_num_rows($result));
        if (mysqli_num_rows($result) > 0) {
            return true;
        }
        else if ($connection->error) {
            print($connection->error);
        }

        return false;
    }

    function createUser($connection, $table, $username, $regno, $email, $password_hash, $contact, $dob) {
        $query = "INSERT INTO $table (username, regno, email, password_hash, contact, dob) 
        VALUES ('$username', '$regno', '$email', '$password_hash', '$contact', '$dob')";
        $result = mysqli_query($connection, $query);

        print($result);
        return $result;
    }

    function workflow($connection, $table, $username, $regno, $email, $password_hash, $contact, $dob) {
        if (userExists($connection, $table, $username, $email)) {
            print("\nUser already exists!<br>\n");
        }
        else {
            createUser($connection, $table, $username, $regno, $email, $password_hash, $contact, $dob);
            print("\n<br>Account created successfully!<br>\n");
        }
    }

    $user = "example_user";
    $password = "#Anuran123";
    $database = "example_database";
    $table = "vtop_mock_users";
    
    $db = new mysqli("127.0.0.1:3306", $user, $password, $database);


    // print("<br>".$_POST["dateInput"]);
    workflow(
        $db,
        $table,
        $_POST["usernameInput"],
        $_POST["regnoInput"],
        $_POST["emailInput"],
        password_hash(
            $_POST["passwordInput"],
            PASSWORD_DEFAULT
        ),
        $_POST["phoneInput"],
        $_POST["dateInput"]
    );

    $db->close();

    // // Password Hash check example.
    
    // $sample = "hello";
    // $hashed_sample = password_hash($sample, PASSWORD_DEFAULT);
    // print($hashed_sample);

    // if (password_verify($sample, password_hash($sample, PASSWORD_DEFAULT))) {
    //     print("<br>Password verified!");
    // }
    // else {
    //     print("<br>Password NOT verified!");
    // }
