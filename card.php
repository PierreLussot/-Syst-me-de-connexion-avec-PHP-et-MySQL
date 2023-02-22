<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php if (isset($_SESSION['email'])) { ?>

    <body>
        <aside class="profile-card">
            <header>
                <h4>Hello : <?= $_SESSION['email']; ?> </h4>
                <!-- here’s the avatar -->
                <a target="" href="deconnexion.php">
                    <img src="img/pierre.png" class="hoverZoomLink">
                </a>

                <!-- the username -->
                <h1>
                    Pierre Lussot
                </h1>

                <!-- and role or location -->
                <h2>
                    Développeur Web
                </h2>

            </header>

            <!-- bit of a bio; who are you? -->
            <div class="profile-bio">

                <p>
                    Développeur web en recherche pour une alternance
                </p>

            </div>
            <!-- some social links to show off -->
            <ul class="profile-social-links">
                <li>
                    <a target="_blank" href="https://codepen.io/your-work">
                        <i class="fa-brands fa-codepen"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://gitlab.com/Pierre-Lussot">
                        <i class="fa-brands fa-gitlab"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/in/pierre-lussot-b34158217/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/PierreLussot">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
            </ul>
        </aside>
    </body>

<?php
}
?>

</html>