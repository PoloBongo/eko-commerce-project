<?php
	session_start();
	require("../database.php");

    if(!isset($_SESSION["user"])){
		header("location:../login_account.php");
	}
    
  ?>

<!DOCTYPE html>
<html lang="en">

	<?php include "../header.php";?>
	<body>
		<?php include "../navbar.php"; ?>

    </div>
		<div class='container mt-4'>
			<div class='row'>
				<div class='col-md-8'>
					<table class='table table-bordered mt-5'>
						<thead>
							<tr>
								<td>id</td>
								<td>nom du produit</td>
								<td>image</td>
                                <td>prix</td>
                                <td>quantité en stock</td>
							</tr>
						</thead>
						<tbody>
                            
							<?php 

                                if($_SESSION["user"]["nom"]){
                                    $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                                    $sql="select * from produit_categorie_1";
                                    $res=$con->query($sql);
                                    if($res->num_rows>0){
                                        $i=0;
                                        while($row=$res->fetch_assoc()){
                                            $i++;
                                            echo "
                                            <tr>
                                                <td>{$row["id"]}</td>
                                                <td>{$row["name"]}</td>
                                                <td>{$row["image"]}</td>
                                                <td>{$row["price"]}</td>
                                                <td>{$row["quantity_max"]}</td>
                                                <td><a href='delete_product_categorie_1.php?id={$row["id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
                                            </tr>";
                                        }
                                    }
                                }

                                if($_SESSION["user"]["nom"]){

                                    $sql="select * from produit_categorie_2";
                                    $res2=$con->query($sql);
                                    if($res2->num_rows>0){
                                        $i=0;
                                        while($row2=$res2->fetch_assoc()){
                                            $i++;
                                            echo "
                                            <tr>
                                                <td>{$row2["id"]}</td>
                                                <td>{$row2["name"]}</td>
                                                <td>{$row2["image"]}</td>
                                                <td>{$row2["price"]}</td>
                                                <td>{$row2["quantity_max"]}</td>
                                                <td><a href='delete_product_categorie_2.php?id={$row2["id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
                                            </tr>";
                                        }
                                    }
                                }

                                if($_SESSION["user"]["nom"]){

                                    $sql="select * from produit_categorie_3";
                                    $res3=$con->query($sql);
                                    if($res3->num_rows>0){
                                        $i=0;
                                        while($row3=$res3->fetch_assoc()){
                                            $i++;
                                            echo "
                                            <tr>
                                                <td>{$row3["id"]}</td>
                                                <td>{$row3["name"]}</td>
                                                <td>{$row3["image"]}</td>
                                                <td>{$row3["price"]}</td>
                                                <td>{$row3["quantity_max"]}</td>
                                                <td><a href='delete_product_categorie_3.php?id={$row3["id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
                                            </tr>";
                                        }
                                    }
                                }

                                if($_SESSION["user"]["nom"]){

                                    $sql="select * from produit_categorie_4";
                                    $res4=$con->query($sql);
                                    if($res4->num_rows>0){
                                        $i=0;
                                        while($row4=$res4->fetch_assoc()){
                                            $i++;
                                            echo "
                                            <tr>
                                                <td>{$row4["id"]}</td>
                                                <td>{$row4["name"]}</td>
                                                <td>{$row4["image"]}</td>
                                                <td>{$row4["price"]}</td>
                                                <td>{$row4["quantity_max"]}</td>
                                                <td><a href='delete_product_categorie_4.php?id={$row4["id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
                                            </tr>";
                                        }
                                    }
                                }

                                if($_SESSION["user"]["nom"]){

                                    $sql="select * from produit_categorie_5";
                                    $res5=$con->query($sql);
                                    if($res5->num_rows>0){
                                        $i=0;
                                        while($row5=$res5->fetch_assoc()){
                                            $i++;
                                            echo "
                                            <tr>
                                                <td>{$row5["id"]}</td>
                                                <td>{$row5["name"]}</td>
                                                <td>{$row5["image"]}</td>
                                                <td>{$row5["price"]}</td>
                                                <td>{$row5["quantity_max"]}</td>
                                                <td><a href='delete_product_categorie_5.php?id={$row5["id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
                                            </tr>";
                                        }
                                    }
                                }
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>