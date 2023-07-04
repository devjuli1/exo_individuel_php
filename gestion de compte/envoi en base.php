<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_de_compte";

$conn = mysqli_connect($servername, $username, $password, $database);{
  echo"connexion bien établit";
}

header("location:Accueil.php");
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
        if (mysqli_query($conn, $sql))
        {
            // L'inscription a réussi
            $success = "Inscription réussie. Vous pouvez maintenant vous connecter en tant qu'utilisateur.";
        }
        else
        {
            // Erreur lors de l'inscription
            $error = "Une erreur est survenue lors de l'inscription. Veuillez réessayer.";
        }
        

        

    ?>