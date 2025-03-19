<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="register.php">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="email" name="email"><br>
    Mot de passe: <input type="password" name="mot_de_passe"><br>
    <input type="submit" value="S'inscrire">
</form>