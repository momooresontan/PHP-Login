<?php 
    include("partials/header.php");
?>
    <?php 
        if(isset($_SESSION["accountCreated"])){
            echo $_SESSION["accountCreated"];
            unset($_SESSION["accountCreated"]);
        }
    ?>

    <div class="form-container">
        <div class="overlay">

        </div>
        <div class="titleDev">
            <h1 class="title">Login</h1>
            <span class="subTitle">Welcome back!</span>   
        </div>

        <?php
            if(isset($_SESSION["noAdmin"])){
                echo $_SESSION["noAdmin"];
                unset($_SESSION["noAdmin"]);
            } 
        ?>

        <form action="" method="POST">
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
<?php 
    include("partials/footer.php");
?>

<?php 
    if(isset($_POST["submit"])){
        //echo "Yes, data submitted!";
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user){
            if(password_verify($password, $user["password"])){
                $_SESSION["loginMessage"] = "<span class='success'>Welcome " . $username . " </span>";
                header("Location: " . SITEURL . "dashboard.php");
                exit();
            }else{
                $_SESSION["noAdmin"] = '<span id="fail" class="fail">Invalid username or password!</span>';
                header("Location: " . SITEURL . "index.php");
                exit();
            }
        }else{
            $_SESSION["noAdmin"] = '<span id="fail" class="fail">Invalid username or password!</span>';
            header("Location: " . SITEURL . "index.php");
            exit();
        }

        if($count == 1 ){
            
        } else{
           
        }
    }
?>