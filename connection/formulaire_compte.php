<?php
	include("../stripe/database_connection.php");
	if($_POST){


		$mdp_crypter = password_hash('$_POST[mdp]', PASSWORD_BCRYPT);
		// insérer dans la table contacts les données que l'utilisateur à remplis dans le formulaire
		$sql = "INSERT INTO inscription(id_compte, nom, prenom, mdp, email, num_tel, date_of_birthday,birthday_notif, admin)
		VALUES(NULL, '$_POST[Name]', '$_POST[Surname]', '$mdp_crypter', '$_POST[mail]', '$_POST[phone_number]','$_POST[date]','-', '0')";

		if ($connect->query($sql) === TRUE ) {
			header("location:login_account.php");
		} else {
			echo '<script>alert("Compte crée avec succès!");</script>';
		}
	};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./style.css" rel="stylesheet">
	<link rel="icon" href="../Images/DA/logo.png" type="image/png">
	<link rel="stylesheet" href="./css/style_panel_client.css">
	<title>Eko</title>
</head>

<body>



	<div class="background">
		<div class="container">
			<div class="screen">
				<!-- Haut de la case avec les petites ellipses de couleur -->
				<div class="screen-header">
					<div class="screen-header-left">
						<div class="screen-header-button close"></div>
						<div class="screen-header-button maximize"></div>
						<div class="screen-header-button minimize"></div>
					</div>
					<div class="screen-header-right">
						<div class="screen-header-ellipsis"></div>
						<div class="screen-header-ellipsis"></div>
						<div class="screen-header-ellipsis"></div>
					</div>
				</div>
				<!-- Titre de la grande case 'Nous contacter' -->
				<div class="screen-body">
					<div class="screen-body-item left">
						<div class="app-title">
							<span>INSCRIPTION</span>
							<a id="connection_form" href="https://www.baimmobilier.fr/eko/connection/login_account.php"><span>SE CONNECTER</span></a>
						</div>
						<!-- Info avec le numero de tel en bas a gauche de la case -->
						<div class="app-contact">En cas de problemes :<br><br>+33 07 ** ** ** **</div>
					</div>
					<div class="screen-body-item">

						<form method="post" class="app-form">
							<input class='app-form-control'
								title="il faut au minimum 2 caractère" type="text" name="Name" placeholder="Prénom"
								maxlength="30" required>
							<input class='app-form-control'
								title="il faut au minimum 2 caractère" type="text" name="Surname" placeholder="Nom"
								maxlength="30" required>
							<input class='app-form-control' type="email" name="mail" placeholder="Mail" maxlength="50"
								required>
							<input class='app-form-control' type="text" name="phone_number"
								placeholder="Numero de téléphone" maxlength="15" required>
							<input class='app-form-control' type="password" name="mdp" placeholder="Mot de Passe"
								required>
							<input class='app-form-control' type="date" name="date" placeholder="Anniversaire" required>
							<div class="app-form-group buttons">
								<!-- Faire le lien avec le bouton ce dessous pour envoyer les donnees dans une BDD -->
								<a><input style="margin-top:10px" type="submit" class="app-form-button" value="Envoyer"></input></a>
							</div>
						</form>
						<a style="display:flex;justify-content:flex-end;margin-top:10px" href="../index.php"><button class="app-form-button">Accueil</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>