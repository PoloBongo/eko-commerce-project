<?php 
	session_start();
	require("database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:login_account.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<link rel="icon" href="../Images/DA/logo.png" type="image/png">
	<link rel="stylesheet" href="./css/style_panel_client.css">
	<?php include "header.php";?>
	<body style="background-image: url(BackgroundContact.png);">
		<?php include "navbar.php"; ?>
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
                <span>MODIFIER</span>
                <span>SON PROFIL</span>
              </div>
              <!-- Info avec le numero de tel en bas a gauche de la case -->
              <div class="app-contact">En cas de problemes :<br><br>+33 07 ** ** ** **</div>
            </div>
            <div class="screen-body-item">
			<?php 
				if(isset($_POST["submit_mail"]) && $_SESSION["user"]["nom"]){
					$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
					$session_name = $_SESSION["user"]["nom"];

					$sql="UPDATE inscription SET email = ('$_POST[mail]') WHERE nom = ('$session_name') ";
					if($con->query($sql)){
						echo"<div class='alert alert-success'>Modification ajouté avec Succès</div>";
					}else{
						echo"<div class='alert alert-danger'>Échec Veuillez Réessayez</div>";
					}
				}
			?>
			<form class="app-form" action='modife_profile.php' method='post' autocomplete='off'>
				<label style="margin-top:10px">Mail</label>
				<input type="text" class="app-form-control"  name='mail' placeholder="Mail">
				<div class="app-form-group buttons">
					<input style="cursor:pointer" class="app-form-control" type='submit' name='submit_mail' value='Modifier'>
				</div>
				<?php 
					if(isset($_POST["submit_tel"]) && $_SESSION["user"]["nom"]){
						$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
						$session_name = $_SESSION["user"]["nom"];

						$sql="UPDATE inscription SET num_tel = ('$_POST[tel]') WHERE nom = ('$session_name') ";
						if($con->query($sql)){
							echo"<div class='alert alert-success'>Added Success</div>";
						}else{
							echo"<div class='alert alert-danger'>Failed Try Again</div>";
						}
					}
				?>
				<label style="margin-top:10px">Téléphone</label>
				<input type="text" class="app-form-control"  name='tel' placeholder="Téléphone">
				<div class="app-form-group buttons">
					<input style="cursor:pointer" class="app-form-control" type='submit' name='submit_tel' value='Modifier'>
				</div>
				<?php 
					if(isset($_POST["submit_mdp"]) && $_SESSION["user"]["nom"]){
						$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
						$session_name = $_SESSION["user"]["nom"];

						$sql="UPDATE inscription SET mdp = ('$_POST[mdp]') WHERE nom = ('$session_name') ";
						if($con->query($sql)){
							echo"<div class='alert alert-success'>Added Success</div>";
						}else{
							echo"<div class='alert alert-danger'>Failed Try Again</div>";
						}
					}
				?>
				<label style="margin-top:10px">Mot de Passe</label>
				<input type="password" class="app-form-control"  name='mdp' placeholder="Mot de Passe">
				<div class="app-form-group buttons">
					<input style="cursor:pointer" class="app-form-control" type='submit' name='submit_mdp' value='Modifier'>
				</div>
			</form>
            </div>
          </div>
        </div>
      </div>
    </div>
	</body>
</html>