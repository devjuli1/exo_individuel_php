<?php
session_start();
$conn = mysqli_connect("$servername, $username, $password, $database");

if (isset($_POST['login'])) {
    $email = $_POST['email']; // Correction: Utiliser $email au lieu de $mail
    $mot_de_passe = $_POST['mot_passe'];

    // Échapper les données pour éviter les injections SQL
    $username = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $mot_de_passe);

    // Vérifier les informations d'identification de l'utilisateur
    $sql = "SELECT * FROM `utilisateur` WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row && password_verify($password, $row['mot_passe']))
    {
        // Les informations d'identification sont valides, connecter l'administrateur
        session_start();
        $_SESSION['utilisateur'] = true;
        $_SESSION['email'] = $row['email'];
        // Rediriger vers la page d'accueil
        header("Location: Accueil.php");
        exit;
    }
    else
    {
        // Les informations d'identification sont invalides
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
        echo"$error"
    }
}