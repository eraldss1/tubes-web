<?php
session_start();
include('koneksi.php');

$errorMessage = "";
if (!empty($_POST)) {
  $username = $_POST['inputUsername'];
  $password = $_POST['inputPassword'];

  $queryString = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

  $query = mysqli_query($koneksi, $queryString);
  $result = mysqli_num_rows($query);
  if ($result == TRUE) {
    $_SESSION['username'] = $username;
    header("location:index.php");
  } else {
    $errorMessage = "Username atau password salah";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/login.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="index.js"></script>
  <title>Login - Sony Indonesia</title>
</head>

<body>
  <div class="d-flex align-items-center justify-content-center sony-login">
    <div class="card bg-light mb-3 sony-card">
      <div class="card-header bg-light">
        <img src="assets/sony_logo.png" class="card-header-img" alt="" />
      </div>
      <div class="card-body">
        <h4 class="card-title">Masuk</h4>
        <form method="POST" action="login.php">
          <div class="form-group">
            <label class="card-text mb-2" for="inputUsername">Username</label>
            <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Masukkan Username" />
          </div>
          <div class="form-group mt-2">
            <label class="card-text mb-2" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Masukkan Password" />
          </div>
          <?php
          if (!empty($errorMessage)) {
            echo '<div class="form-group mt-2">
                    <p class="card-text text-danger">' . $errorMessage . '</p>
                  </div>';
          }
          ?>
          <div class="form-group mt-2">
            <a class="card-text" href="">Lupa kata sandi?</a>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- <script src="index.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>