<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Eko Shop</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="icon" href="../../Images/DA/logo.png" type="image/png">
		<link rel="stylesheet" href="../style.css">
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
	</head>
	<body>

		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a href="https://www.baimmobilier.fr/eko/index.php"><img class="eko-img" src="../images/eko.png" alt="eko"></a>
					</div>
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price"> 0.00 &euro;</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div class="btn_place">
					<?php
            			session_start();
            			require("../database_connection.php");
                
            			if(isset($_SESSION["user"])){
							echo '<a href="../order_process.php" class="btn btn-primary" id="check_out_cart"><span class="glyphicon glyphicon-shopping-cart"></span>Commander</a>';
            			}else{
                			echo '<a href="https://www.baimmobilier.fr/eko/connection/login_account.php" class="btn btn-danger">Veuillez vous connecter</a>';
            			}
        			?>
					<a href="#" class="btn btn-default" id="clear_cart">
						<span class="glyphicon glyphicon-trash"></span> Supprimer tous les produits
					</a>
				</div>
			</div>

			<div id="display_item" class="row">

			</div>

				
				<br />
				<br />
			</div>
		</div>

	</body>
</html>



<script>

$(document).ready(function(){

	load_product();

	load_cart_data();

	function load_product()
	{
		$.ajax({
			url:"./affichage_produit_page_1.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		})
	}

	function load_cart_data()
	{
		$.ajax({
			url:"../fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		})
	}

	$('#cart-popover').popover({
		html : true,
		container : 'body',
		content:function(){
			return $('#popover_content_wrapper').html();
		}
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr('id');
		var quantity = $(this).attr('quantity_max');
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var product_quantity_max = $('#quantity_max'+product_id).val();
		var action = 'add';
		if (product_quantity > product_quantity_max)
		{
			alert("Il n'y a pas assez de Stock !");
		}else{
			if(product_quantity > 0)
			{
				$.ajax({
					url:"../action.php",
					method:"POST",
					data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
					success:function(data)
					{
						load_cart_data();
						alert("Produit ajouté à votre panier");
					}
				})
			}
			else
			{
				alert("Merci de rentrer une quantité valide");
			}
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr('id');
		var action = 'remove';
		if(confirm("Voulez-vous vraiment supprimer cette article de votre panier?"))
		{
			$.ajax({
				url:"../action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function(data)
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Le produit a bien été supprimé de votre panier");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"../action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Votre panier a bien étais supprimer");
			}
		})
	});
    
});

</script>