<?php  
    session_start();
    $bdd = new PDO('mysql:host=mysql-databasetest.alwaysdata.net;dbname=databasetest_promoteddb;', '335454', 'Tigrou2023');
    if(isset($_POST['Mail']) && !empty($_POST['Mail'])){
        $Mail = htmlspecialchars($_POST['Mail']);   

        $check = $bdd->prepare('SELECT Mail FROM USERS WHERE Mail = ?');
        $check->execute(array($Mail));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row){
            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $password_reset_token = $data['token'];

            $insert = $bdd->prepare('INSERT INTO password_recover(admin_id, password_reset_token) VALUES(?, ?)');
            $insert->execute(array($admin_id, $password_reset_token));

            $link = 'recover.php?u='.base64_encode($admin_id).'&password_reset_token='.base64_encode($password_reset_token);

            echo "<a href='$link'>Lien</a>";

        }else{
            echo "Le compte admin n'existe pas";
        }
    }
?>


<!doctype html>
<html lang="fr">
  <head>
    <title>J'ai oublie mon mot de passe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="col-11">
              <div class="card text-center m-4 shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                  <h4 class="card-title p-3">J'ai oublie mon mot de passe</h4>
                    <div class="form-group">
                        <form action="password_change.php" method="POST">
                            <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required />
                            <button type="submit" class="btn btn-primary btn-lg m-3">Envoyer</button>
                        </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>