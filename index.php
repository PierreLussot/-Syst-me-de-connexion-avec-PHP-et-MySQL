<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="align">
    <?php if (isset($_SESSION['email'])) {
        header("location: card.php");
    } else {
    ?>

        <div class="grid">

            <form action="login.php" method="POST" class="form login">

                <header class="login__header">
                    <h3 class="login__title">Login</h3>
                </header>

                <div class="login__body">

                    <div class="form__field">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form__field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                </div>

                <footer class="login__footer">
                    <input type="submit" value="Login" name="submit">

                    <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
                </footer>

            </form>

        </div>
    <?php
    }
    ?>
</body>


</html>