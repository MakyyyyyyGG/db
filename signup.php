<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="" method="post">
                <h1>Create an Account</h1>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required><br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required><br>
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" required><br>
                <button type="submit" name="submit">Signup</button>
                <span>Already have an account? <a href="login.php" class="login">Login</a></span>
            </form>
        </div>
    </div>


        <?php
            if(isset($_POST['submit'])){
            require '_dbcon.php';
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $duplicate = mysqli_query($connect, "SELECT * FROM db WHERE username = '$username' OR email = '$email'");

            if(mysqli_num_rows($duplicate)>0){
                echo
                "<script>alert('Username or Email has Already Exist')</script>";
            }else{
                if($password ==  $cpassword){
                    $query = "INSERT INTO db VALUES('', '$name', '$username', '$email', '$password')";
                    mysqli_query($connect, $query);
                    echo
                    "<script>alert('Account Created!')</script>";
                }else{
                    "<script>alert('Password does not match!')</script>";
                }
            }
        }
        ?>
</body>
</html>