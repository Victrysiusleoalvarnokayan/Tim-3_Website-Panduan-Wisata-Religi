<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];

    // Sanitasi input
    $user = mysqli_real_escape_string($koneksi, $user);
    $pass = mysqli_real_escape_string($koneksi, $pass);
    $confirm_pass = mysqli_real_escape_string($koneksi, $confirm_pass);

    // Validasi password
    if ($pass !== $confirm_pass) {
        $error = "Password dan konfirmasi password tidak cocok.";
    } else {
        // Cek apakah username sudah ada
        $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user'");
        if (mysqli_num_rows($cek_user) > 0) {
            $error = "Username sudah digunakan, silakan pilih username lain.";
        } else {
            // Insert password langsung ke database tanpa hashing
            $query = "INSERT INTO user (username, password) VALUES ('$user', '$pass')";
            if (mysqli_query($koneksi, $query)) {
                // Redirect ke halaman login setelah berhasil registrasi
                header("Location: login.php");
                exit();
            } else {
                $error = "Terjadi kesalahan saat menyimpan data. Silakan coba lagi.";
            }
        }
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
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form id="signupForm" action="" method="POST">
            <h2>Create New Account</h2>
            <div class="input-field">
                <input type="text" class="form-control" id="user" name="user" required>
                <label>Enter Your Username</label>
            </div>
            <div class="input-field">
                <input type="password" class="form-control" id="pass" name="pass" required>
                <label>Enter Your Password</label>
            </div>
            <div class="input-field">
                <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" required>
                <label>Confirm Your Password</label>
            </div>
            <button type="submit">Sign Up</button>
            <div class="register">
                <p>
                    Have an account?
                    <a href="login.php"> Login Here</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>