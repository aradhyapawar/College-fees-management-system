<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles8.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="ws.html"onsubmit="return invalid()" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
        function isvalid(){
            var username = document.form.username.value;
            var password = document.form.password.value;
            if(username.length==""&& password.length==""){
                alert("username and password field is empty !!");
                return false
            }
            else{
                if(username.length==""){
                alert("username  is empty !!");
                return false
             }
             if(password.length==""){
                alert("password is empty !!");
                return false
             }
</body>
</html>
