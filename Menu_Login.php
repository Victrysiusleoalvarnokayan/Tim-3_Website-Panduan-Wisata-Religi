<?php
//php
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
        <form id="loginForm" action="/login" method="post">
            <h2>WELCOME</h2>
            <div class="input-field">
                <input type="email" id="loginEmail" name="email" required>
                <label>Enter Your Email </label>
            </div>
            <div class="input-field">   
                <input type="password" id="loginPassword" name="password" required>
                <label>Enter Your Password</label>
            </div>
            <button type="submit">Log In</button>
            <div class="register">
                <p>Don't have an account? <a href="#" onclick="showSignUp()">Create Account</a></p>
            </div>
        </form>

        <!-- Create Account Form -->
        <form id="signupForm" action="/login" method="post" style="display: none">
            <h2>Create New Account</h2>
            <div class="input-field">   
                <input type="text" id="signupUsername" name="username" required>
                <label>Enter Your Username</label>
            </div>
            <div class="input-field">
                <input type="email" id="signupEmail" name="email" required>
                <label>Enter Your Email </label>
            </div>
            <div class="input-field">
                <input type="password" id="signupPassword" name="password" required>
                <label>Enter Your Password</label>
            </div>
            <div class="input-field">
                <input type="password" id="signupConfirmPassword" name="confirm_password" required>
                <label>Confirm Your Password</label>
            </div>
            <button type="submit">Sign Up</button>
            <div class="register">
            <p>
                Have an account?
                <a href="#" onclick="showLogin()">Log In</a>
            </p>
            </div>
        </form>
    </div>

    <script>
        function showSignUp() {
            document.getElementById('loginForm').style.display = 'none';
            document.getElementById('signupForm').style.display = 'block';
        }

        function showLogin() {
            document.getElementById('signupForm').style.display = 'none';
            document.getElementById('loginForm').style.display = 'block';
        }
    </script>
</body>
</html>
