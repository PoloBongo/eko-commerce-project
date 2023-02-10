<?php
	session_start();
	require("./database.php");

    if(!isset($_SESSION["user"])){
		header("location:login_account.php");
	}
    
  ?>

<!DOCTYPE html>
<html lang="en">

<?php include "./header.php";?>

<body>
  <?php include "./navbar.php"; ?>

  </div>
  <div class='container mt-4'>
    <div class='row'>
      <div class='col-md-8'>
        <table class='table table-bordered mt-5'>
          <thead>
            <tr>
              <td>id</td>
              <td>Nom</td>
              <td>Transaction id</td>
              <td>Mail Client</td>
              <td>Adresse de livraison</td>
              <td>Ville</td>
              <td>Département</td>
              <td>Pays</td>

            </tr>
          </thead>
          <tbody>

            <?php 

              if($_SESSION["user"]["nom"]){
                $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                $check_order= $_SESSION["user"]["nom"];
                
                $sql="select * from order_table WHERE customer_name = '$check_order'";
                  $res_order=$con->query($sql);
                    if($res_order->num_rows>0){
                      $i=0;
                      while($row_order=$res_order->fetch_assoc()){
                        $i++;
                        echo "
                          <tr>
                            <td>{$row_order["order_id"]}</td>
                            <td>{$row_order["customer_name"]}</td>
                            <td>{$row_order["transaction_id"]}</td>
                            <td>{$row_order["email_address"]}</td>
                            <td>{$row_order["customer_address"]}</td>
                            <td>{$row_order["customer_city"]}</td>
                            <td>{$row_order["customer_state"]}</td>
                            <td>{$row_order["customer_country"]}</td>
                          <td><a href='delete_order.php?order_id={$row_order["order_id"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are You Sure ?\")'>Supprimer</a></td>
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