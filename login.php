<?php
session_start();
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
    $row = mysqli_fetch_array($data);
    if (mysqli_num_rows($data) > 0){
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit();
    }else{
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Create Account</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="wrapper">
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form id="loginForm" action="" method="POST">
            <h2>WELCOME</h2>
            <div class="input-field">
                <input type="text" class="form-control" id="user" name="user" required>
                <label>Enter Your Username </label>
            </div>
            <div class="input-field">
                <input type="password" class="form-control" id="pass" name="pass" required>
                <label>Enter Your Password</label>
            </div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="registrasi.php">Create Account</a></p>
            </div>
        </form>
    </div>
</body>
</html>