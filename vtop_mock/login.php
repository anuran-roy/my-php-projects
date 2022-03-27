<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>VTOP Login</title>
    </head>
    <body>
        <div class="main">
        <div class='margin-left p-3 bg-[#E44000] blur-bg container'>
        <h2 class='text-4xl text-white font-bold'>Login to VTop</h1>
        <form method='POST' action='login_validate.php' class='margin-left px-3'>
            <p class="field">
                <label for="usernameInput">Username or Email:</label><br>
                <input type="text" name="usernameInput" id="usernameInput">
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