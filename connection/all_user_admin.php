<?php
	session_start();
	require("./database.php");

    if(!isset($_SESSION["user"])){
		header("location:login_account.php");
	}
    
  ?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.php";?>

<body>
  <?php include "navbar.php"; ?>

  </div>
  <div class='container mt-4'>
    <div class='row'>
      <div class='col-md-8'>
        <table class='table table-bordered mt-5'>
          <thead>
            <tr>
              <td>id de transaction</td>
              <td>Mail</td>
              <td>nom du client</td>
              <td>adresse de livraison</td>
              <td>Ville</td>
              <td>Pays</td>
              <td>Date de Naissance</td>
              <td>Admin</td>
            </tr>
          </thead>
          <tbody>

            <?php 

              if($_SESSION["user"]["nom"]){
                $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $sql="select * from inscription";
                $res=$con->query($sql);
                  if($res->num_rows>0){
                      $i=0;
                      while($row=$res->fetch_assoc()){
                          $i++;
                          echo "
                          <tr>
                              <td>{$row["id_compte"]}</td>
                              <td>{$row["nom"]}</td>
                              <td>{$row["prenom"]}</td>
                              <td>{$row["mdp"]}</td>
                              <td>{$row["email"]}</td>
                              <td>{$row["num_tel"]}</td>
                              <td>{$row["date_of_birthday"]}</td>
                              <td>{$row["admin"]}</td>
                              <td><a href='delete_reminder.php?id={$row["id_compte"]}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are You Sure ?\")'>Delete</a></td>
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