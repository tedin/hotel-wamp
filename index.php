<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/public/stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="/public/stylesheets/index.css">
</head>
<body>
<?php
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
     
}
$servername = "localhost";
$username = "username";
$password = "password";
$email = "";
$password = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["unmLogin"]);
        $password = test_input($_POST["passLogin"]);
}
// Zamijeniti sa nasom bazom
/*$conn = new mysqli($servername, $username, $password);

// Provjera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from korisnici where korisnickoime=$email";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{

}*/
?>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img id="logo-navbar" src="/public/images/hotel-logo.png">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="navigacija-lijevo">
      </ul>
      <ul class="nav navbar-nav navbar-right" id="navigacija-desno">
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" id="image-jumbo">
  <h1 class="text-center naslov"><img src="/public/images/hotel-logo.png"</h1>
</div>

<div class="container-fluid">
  <div class="col-sm-6 clanak">
    <div class="slika-wrapper" id="slika-wrapper-1">
      <div class="col-sm-5 lijevi tamni">
        <h4 class="text-center">Lorem Ipsum</h4>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Duis ultricies enim non lacus efficitur, eu rutrum dolor venenatis.
          Mauris tempus tincidunt lorem, sed pharetra ipsum feugiat et.
          Phasellus sit amet ipsum vel tellus faucibus sodales.
          Mauris lobortis nisi posuere orci facilisis, elementum ullamcorper libero congue.</p>
      </div>
      <div class="col-sm-7 desni"></div>
    </div>
  </div>
  <div class="col-sm-6 clanak">
    <div class="slika-wrapper" id="slika-wrapper-2">
      <div class="col-sm-5 lijevi tamni">
        <h4 class="text-center">Lorem Ipsum</h4>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Duis ultricies enim non lacus efficitur, eu rutrum dolor venenatis.
          Mauris tempus tincidunt lorem, sed pharetra ipsum feugiat et.
          Phasellus sit amet ipsum vel tellus faucibus sodales.
          Mauris lobortis nisi posuere orci facilisis, elementum ullamcorper libero congue.</p>
      </div>
      <div class="col-sm-7 desni"></div>
    </div>
  </div>
  <div class="col-sm-6 clanak">
    <div class="slika-wrapper" id="slika-wrapper-3">
      <div class="col-sm-7 lijevi"></div>
      <div class="col-sm-5 desni tamni">
        <h4 class="text-center">Lorem Ipsum</h4>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Duis ultricies enim non lacus efficitur, eu rutrum dolor venenatis.
          Mauris tempus tincidunt lorem, sed pharetra ipsum feugiat et.
          Phasellus sit amet ipsum vel tellus faucibus sodales.
          Mauris lobortis nisi posuere orci facilisis, elementum ullamcorper libero congue.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 clanak">
    <div class="slika-wrapper" id="slika-wrapper-4">
      <div class="col-sm-7 lijevi"></div>
      <div class="col-sm-5 desni tamni">
        <h4 class="text-center">Lorem Ipsum</h4>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Duis ultricies enim non lacus efficitur, eu rutrum dolor venenatis.
          Mauris tempus tincidunt lorem, sed pharetra ipsum feugiat et.
          Phasellus sit amet ipsum vel tellus faucibus sodales.
          Mauris lobortis nisi posuere orci facilisis, elementum ullamcorper libero congue.</p>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

<div id="loginModal" class="modal fade" role="dialog">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <h2 class="modal-heading text-center">Prijava</h2>
        <br />
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center" method="post">
          <label for="unmLogin">Korisničko ime:</label>
          <input type="text" class="form-control" name="unmLogin" id="unmLogin" required>
          <br />
          <label for="passLogin">Šifra:</label>
          <input type="password" class="form-control" name="passLogin" id="passLogin" required>
          <br />
          <input class="btn dugme" type="submit">
          </form>
      </div>
    </div>
  </div>
</div>
<script src="/public/javascripts/index.js"></script>
</body>
</html>
