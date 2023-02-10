<?php 
	session_start();
	require("database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:login_account.php");
	}
?>

<?php 
	function number_suffix($number){
		$ends = array('th','st','nd','rd','th','th','th','th','th','th');
		 if ((($number % 100) >= 11) && (($number%100) <= 13)){
			return $number. 'th';
		 }else{
			return $number.$ends[$number % 10];
		 }
	}
	
	$notifications=[];
	$current_month_day=date("m-d");
	$sql="select * from inscription where DATE_FORMAT(date_of_birthday, '%m-%d')='{$current_month_day}'";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$age=(date("Y")-date("Y",strtotime($row["date_of_birthday"])))+1;
			$notifications[]="<i class='fa fa-bell'></i> Bonjour <b>{$row["nom"]}</b>, l'équipe EKO vous souhaite un Joyeux anniversaire!<br> Data de Naissance : ".date("d-m-Y",strtotime($row["date_of_birthday"]))."</b>";
			if($_SESSION["success_message"]){
				$notifications[]= "Payment is completed successfully. The TXN ID is " . $response["balance_transaction"] . "";
			}
		}
	}

	if(isset($_SESSION["success_message"]))
	{
		echo '
		<div class="alert alert-success">
		'.$_SESSION["success_message"].'
		</div>
		';
		unset($_SESSION["success_message"]);
	}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="https://www.baimmobilier.fr/eko/connection/home.php">Eko</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="https://www.baimmobilier.fr/eko/connection/home.php"><span class='fa fa-user'></span> Bienvenue : <?= $_SESSION["user"]["nom"], ' ', $_SESSION["user"]["prenom"] ?> </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.baimmobilier.fr/eko/mentions.php"><span class='fa fa-sticky-note'></span> Mentions Légal</a>
			</li>
			<?php
			if($_SESSION["user"]["admin"] == 1) {
			echo '<li class="nav-item"><a class="nav-link" href="https://www.baimmobilier.fr/eko/connection/admin_page.php"><span class="fa fa-unlock"></span> Pannel Admin</a></li>';
			}else{
				echo '<li class="nav-item"><a class="nav-link" href="https://www.baimmobilier.fr/eko/connection/home.php"><span class="fa fa-lock"></span> Pannel Admin</a></li>';
			}
			?>
			<li class="nav-item">
				<a class="nav-link" href="https://www.baimmobilier.fr/eko/"><span class='fa fa-home'></span> Page d'acceuil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.baimmobilier.fr/eko/connection/modife_profile.php"><span class='fa fa-pencil'></span> Modifier son Profil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.baimmobilier.fr/eko/connection/historique_commande.php"><span class='fa fa-history'></span> Historique Comande</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<span class='fa fa-bell'></span>(<?php echo count($notifications);?>)
				</a>
				<?php if(count($notifications)>0): ?>
					<div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="navbarDropdown">
						<?php foreach($notifications as $row):?>
							<a class="dropdown-item pt-3 pb-3 alert alert-success" href="#"><?php echo $row; ?></a>
						<?php endforeach;?>
					</div>
				<?php endif; ?>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
			</li>
		</ul>
	</div>
</nav>