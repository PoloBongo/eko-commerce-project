<?php 
	session_start();
	require("database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:login_account.php");
	}
	
	$users=[];
	$current_month_day=date("m-d");
	$current_year=date("Y");
	#Select today birthday users
	$sql="select * from inscription where DATE_FORMAT(date_of_birthday, '%m-%d')='{$current_month_day}' and birthday_notif<>'{$current_year}'";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$users[]=$row;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="../Images/DA/logo.png" type="image/png">
<?php include "header.php";?>

<body>
	<?php include "navbar.php"; ?>
	<div class='container mt-4'>
		<div class='row'>

			<div class='col-md-4'>
				<?php foreach($notifications as $row):?>
				<div class="alert alert-primary mb-3 pt-4 pb-4" href="#"><?php echo $row; ?></div>
				<?php endforeach;?>
			</div>
			<div class='col-md-8'>
				<div class="jumbotron">
					<h1 class="display-4">Compte Client</h1>
					<hr class="my-4">
					<p class="lead">Cher membre du panel client,

						Nous sommes ravis de vous accueillir au sein de notre panel de clients. Votre participation est
						précieuse pour nous et nous sommes impatients de vous offrir une expérience innoubliable.

						En tant que membre du panel, vous aurez l'opportunité de donner votre avis sur nos produits et
						services, ce qui nous aidera à mieux comprendre vos besoins et à améliorer votre expérience
						d'achat. Nous vous invitons également à partager vos idées et suggestions dans l'onglet
						"contact" pour nous aider à développer de nouveaux produits et services.

						Nous vous remercions à l'avance pour votre engagement envers notre entreprise et nous sommes
						impatients de travailler avec vous pour construire un avenir encore plus brillant.

						Cordialement,
						Eko</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>