<!DOCTYPE html>
<html>

<head>
    <title>IMRC</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <form action="login.php" method="post">

        <img src='img/logo.png' height="230" width="440" />

        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email Address</label>
        <input type="text" name="uname" required placeholder="Email Address"><br>

        <label>Password</label>
        <input type="password" name="password" required placeholder="Password"><br>


            <button type="submit">Login</button>
        <a href="signup.php" class="ca">
            <p style="color:white;"> Register Here </p>
        </a>
    </form>
</body>

</html>