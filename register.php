<?php 
    include("partials/header.php");
?>
    <div class="register_container">
        <div class="overlay">

        </div>
        <div class="titleDev">
            <h1 class="title">Register</h1>
            <span class="subTitle">Thanks for choosing us!</span>   
        </div>
        <form action="" method="POST">
            <div class="rows grid">
                <div class="row">
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="row">
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="row">
                    <label for="phone">Phone Number: </label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>
                <div class="row">
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="row">
                    <input type="submit" id="submitBtn" name="submit" value="Register">
                    <span class="registerLink">Have an account already? <a href="index.php">Login</a> </span>
                </div>
            </div>
        </form>
    </div>
<?php 
    include("partials/footer.php");
?>

<?php 
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin SET 
        username = '$username',
        email = '$email',
        password = '$passwordHash',
        phone = '$phone'";

        $result = mysqli_query($conn, $sql);
        if($result == true){
            $_SESSION["accountCreated"] = "<span class='success'>Account " .$username. " created!</span>";
            header("Location: " .SITEURL. "index.php");
            exit();
        } else{
            $_SESSION["unsuccessful"] = "<span class='fail'>Account " .$username. " failed to be created!</span>";
            header("Location: " .SITEURL. "register.php");
            exit();
        }
    }

?>