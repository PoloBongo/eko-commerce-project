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
              <td>Nom</td>
              <td>Mail</td>
              <td>Numéro</td>
              <td>Message</td>

            </tr>
          </thead>
          <tbody>

            <?php 

              if($_SESSION["user"]["nom"]){
                $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $sql="select * from contact";
                  $res=$con->query($sql);
                    if($res->num_rows>0){
                      $i=0;
                      while($row=$res->fetch_assoc()){
                        $i++;
                        echo "
                          <tr>
                            <td>{$row["id_c"]}</td>
                            <td>{$row["nom"]}</td>
                            <td>{$row["email"]}</td>
                            <td>{$row["numero"]}</td>
                            <td>{$row["message"]}</td>
                          <td><a href='delete_contact_bdd.php?id_c={$row["id_c"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Etes vous sûr ?\")'>Supprimer</a></td>
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