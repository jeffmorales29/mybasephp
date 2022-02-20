<?php
require_once('class.php');
$store->login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="" method="POST">
                <div class="form-input">
                    <label for="">username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password">
                </div>

                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>