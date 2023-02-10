<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Images/DA/logo.png" type="image/png">
<link rel="stylesheet" href="./css/style_panel_client.css">
<?php include "header.php";?>

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
							<span>SE</span>
							<span>CONNECTER</span>
						</div>
						<div class="app-title">
							<a href="./formulaire_compte.php" style="margin-top:40px;text-decoration:none;color:#e2c984">Créer un compte</a>
						</div>
						<!-- Info avec le numero de tel en bas a gauche de la case -->
						<div class="app-contact">En cas de problemes :<br><br>+33 07 ** ** ** **</div>
					</div>
					<div class="screen-body-item">
						<form action='verif.php' method='post' class="app-form">
							<div class="form-group">
								<label>Nom</label>
								<input type="text" class="app-form-button" name='nom' placeholder="Nom" required>
							</div>
							<div class="form-group">
								<label>Prénom</label>
								<input type="text" class="app-form-button" name='prenom' placeholder="Prénom" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="app-form-button" name='mdp' placeholder="Password"
									required>
							</div>
							<div class="form-group">
								<input type='submit' name='login' value='Se connecter' class='app-form-button'>
							</div>
						</form>
						<a style="display:flex;justify-content:flex-start;margin-top:10px;text-decoration:none" href="../index.php"><button class="app-form-button">Accueil</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>