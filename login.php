<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=loginsysteme", "root", "root");
        $requete = "SELECT * FROM user WHERE email = '$email' ";
        $resultat = $connexion->prepare($requete);
        $resultat->execute();

        if ($resultat->rowCount() > 0) {
            $data = $resultat->fetchAll();
            if (password_verify($password, $data[0]['password'])) {
                echo "connexion effectuée";
                $_SESSION['email'] = $email;
                header('location: index.php');
            }
        } else {
            $passHash = password_hash($password, PASSWORD_DEFAULT);
            $requete = "INSERT INTO user(email,password)VALUES('$email','$passHash')";
            $req = $connexion->prepare($requete);
            $req->execute();
            echo "enregistrement effectueé";
        }
    } catch (PDOException $e) {

        echo "Echec de la connexion: " . $e->getMessage();
    }
}
?>
<pre></pre>