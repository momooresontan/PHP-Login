<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account in PHP</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="form-container">
        <div class="overlay">

        </div>
        <div class="titleDev">
            <h1 class="title">Login</h1>
            <span class="subTitle">Welcome back!</span>   
        </div>
        <form action="" method="post">
            <div class="rows grid">
                <div class="row">
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="row">
                    <label for="username">Password: </label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Login">
                    <span class="registerLink">Don't have an account? <a href="register.php">Register</a> </span>
                </div>
            </div>
        </form>
    </div>
</body>
</html>