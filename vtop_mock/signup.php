<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>VTOP Signup</title>
    </head>
    <body>
        <div class="main">
        <div class='margin-left p-3 bg-[#E44000] blur-bg container'>
        <h2 class='text-4xl text-white font-bold'>Sign Up</h1>
        <form method='POST' action='signup_validate.php' class='margin-left px-3'>
            <!-- <p class="field">
                <label for='name' class='text-white'>Name:</label><br>
                <input class='border-2 rounded-lg bg-gray-200 border-2' type='text' name='name' id='name' required>
            </p> -->
            <p class="field">
                <label for="regnoInput">Reg. No:</label><br>
                <input type="text" name="regnoInput" id="regnoInput">
            </p>
            <p class="field">
                <label for="phoneInput">Contact Number: </label><br>
                <input type="tel" name="phoneInput" id="phoneInput">
            </p>
            <p class="field">
                <label for="usernameInput">Username:</label><br>
                <input type="text" name="usernameInput" id="usernameInput">
            </p>
            <p class="field">
                <label for="dateInput">Date of Birth:</label><br>
                <input type="date" name="dateInput" id="dateInput" required>
            </p>
            <!-- <p class="field">
                <label for="addressInput">Address:</label><br>
                <textarea name="addressInput" id="addressInput" width="20%"></textarea>
            </p> -->
            <p class="field">
                <label for="emailInput">Email:</label><br>
                <input type="email" name="emailInput" id="emailInput" required>
            </p>
            <p class="field">
                <label for="passwordInput">Password:</label><br>
                <input type="password" name="passwordInput" id="passwordInput" required>
            </p>
            <button type="submit" class="btn">Submit</button>
        </form>
        </div>
        </div>
    </body>
</html>