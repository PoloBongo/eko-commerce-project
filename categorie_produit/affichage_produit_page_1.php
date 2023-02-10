<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>Eko</title>
</head>
<body>

</body>
</html>

<?php

include('../database_connection.php');

$query = "
SELECT * FROM produit_categorie_1 ORDER BY id ASC
";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '



<div class="card">
	<div class="img-container">
		<div class="img">
			<img src="../images/'.$row["image"].'" class="img" alt="img-product_1"/>
		</div>
	
		<div class="description card">
			<span class="title">
				'.$row["name"].' : '.$row["price"].'
				<input type="number" min="0" max='.$row["quantity_max"].' name="quantity" id="quantity'.$row["id"].'" class="form-control" value="1" />
				<button style="background-color:black" id="'.$row["id"].'" class="card-button add_to_cart">Ajouté au Panier</button>
			</span>
		</div>
		<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
		<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
		<input type="hidden" name="hidden_quantity_max" id="quantity_max'.$row["id"].'" value="'.$row["quantity_max"].'" />
	</div>
</div>


		';
	}
	echo $output;
}

// :'.$row["quantity_max"].'

?>