<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<div id="register-form-wrap">
    <h1>Register</h1>
    <!-- <h2>Please fill this form below . . . </h2> -->
    <hr>
    <form id="register-form">
    <!-- <ul> -->
    <h2>Email</h2>
    <p>
    <input type="text" placeholder="example@email.com" name="email" id="email" required>
    </p>
    <h2>Password</h2>
    <p>
    <input type="password" placeholder="Password" name="psw" id="psw" required>
    </p>
    <h2>Repeat Password</h2>
    <P>
    <input type="password" placeholder="Repeat Password" name="psw" id="psw" required>
    </p>
    <p>by creating an account means you agree to our Terms & Privacy</p>
    <!-- Belum bisa masuk login page nya -->
    <p>
    <button type="submit" class="registerbtn" href="login.blade.php" >Register</button>
    </p>
    <br>
    <!-- </ul> -->
    </form>
    </body>
</div>

</body> 
</html>