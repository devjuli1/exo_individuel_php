<!-- <?php
// Inclure le fichier de configuration de la base de données
include 'connexionbd.php';

// // Vérifier si l'administrateur est déjà connecté
session_start();
if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] === true)
{
    // Rediriger vers la page d'administration si l'administrateur est déjà connecté
    header("Location: Accueil.php");
    exit;
}

// Déclarer les variables pour stocker les messages d'erreur/succès
$error = "";

// Traitement du formulaire de connexion
if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['mot_passe'];

    // Échapper les données pour éviter les injections SQL
    $username = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Vérifier les informations d'identification de l'administrateur
    $sql = "SELECT * FROM `utilisateur` WHERE email = '$email'";
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
    }
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Page connexion
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="mot_passe" placeholder="Mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					  <!-- <?php if (!empty($error)): 
						echo"$error" ?> -->
						<span class="txt1">
							Forgot
						</span>

						<a href="connexion.php" class="txt2">
							email / mot_de_passe?
						</a>
					</div>
					<!-- oubien => <div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							authentifier
						</span>

						<a href="connexion.php" class="txt2">
							email / mot_de_passe?
						</a>
					</div> -->

					<div class="container-login100-form-btn">
						<a href="Accueil"><button class="login100-form-btn">
							SE connecter
						</button> </a>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="inscription.php" class="txt3">
							S'inscrire maintenant
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>