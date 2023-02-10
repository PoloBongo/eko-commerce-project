<?php
	session_start();
	require("./database.php");

    if(!isset($_SESSION["user"]) && $_SESSION["user"]["admin"] == 1){
		header("location:login_account.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="icon" href="../Images/DA/logo.png" type="image/png">
    <link rel="stylesheet" href="./css/style_panel_client.css">

	<?php include "header.php";?>
	<body>
		<?php include "navbar.php"; ?>
        <div style="background-image:none" id="categorie_admin">
            <div style="margin-left:10px;width:300px;height:300px;margin-top:250px" class="card" style="width: 18rem;">
                <a href="./all_user_admin.php"><img src="../Images/DA/logo.png" alt="logo du site eko" class="card-img-top" alt="admin_all_user"></a>
                <div class="card-body">
                    <p class="card-text">Panel admin avec accès à tout les utilisateurs.</p>
                </div>
            </div>
            <div style="margin-left:10px;width:300px;height:300px;margin-top:250px" class="card" style="width: 18rem;">
                <a href="./delete_product_admin/donnee_contact.php"><img src="../Images/DA/logo.png" alt="logo du site eko" class="card-img-top" alt="admin_all_user"></a>
                <div class="card-body">
                    <p class="card-text">Panel admin avec tous formulaire de contact envoyé.</p>
                </div>
            </div>
            <div style="margin-left:10px;width:300px;height:300px;margin-top:250px" class="card" style="width: 18rem;">
                <a href="./delete_product_admin/delete_product.php"><img src="../Images/DA/logo.png" alt="logo du site eko" class="card-img-top" alt="admin_all_user"></a>
                <div class="card-body">
                    <p class="card-text">Panel admin avec tous les produits disponible sur le site.</p>
                </div>
            </div>
        </div>
	</body>
</html>