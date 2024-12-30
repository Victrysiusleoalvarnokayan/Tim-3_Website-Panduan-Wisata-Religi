<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitasi input
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Query untuk mengambil data user berdasarkan username
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password (gunakan password_hash() untuk menyimpan password di database)
        if (password_verify($password, $user['password'])) {
            // Simpan informasi user ke session
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect ke dashboard sesuai role
            if ($user['role'] === 'owner') {
                header("Location: dashboard/dashboard_owner.php");
            } elseif ($user['role'] === 'admin') {
                header("Location: dashboard/dashboard_admin.php");
            } elseif ($user['role'] === 'user') {
                header("Location: dashboard/dashboard_user.php");
            } else {
                echo "Role tidak valid.";
            }
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
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
                <input type="text" class="form-control" id="username" name="username" required>
                <label>Enter Your Username* </label>
            </div>
            <div class="input-field">
                <input type="email" class="form-control" id="email" name="email" required>
                <label>Enter Your Email*</label>
            </div>
            <div class="input-field">
                <select class="form-label" id="role" name="role" required>
                    <option value="" disabled selected>Choose your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="Owner">Owner</option>
                </select>
            </div>
            <div class="input-field">
                <input type="password" class="form-control" id="password" name="password" required>
                <label>Enter Your Password*</label>
            </div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="registrasi.php">Create Account</a></p>
            </div>
        </form>
    </div>
</body>
</html>