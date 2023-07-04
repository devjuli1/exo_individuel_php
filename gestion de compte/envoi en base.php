<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_de_compte";

$conn = mysqli_connect($servername, $username, $password, $database);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date_naissance'];
    $sex = $_POST['sexe'];
    $mail = $_POST['email'];
    $pass = $_POST['mot_passe'];

        // Hasher le mot de passe avant de l'enregistrer dans la base de données
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $req ="INSERT INTO `utilisateur`(`nom`, `prenom`, `date_naissance`, `sexe`, `email`, `mot_passe`)
        VALUES ('$nom','$prenom','$date','$sex',' $mail',' $pass')";
        mysqli_query($conn, $req);

    ?>