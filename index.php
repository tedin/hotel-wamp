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
</head>
<body>
<?php


  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = test_input($_POST['unmLogin']);
    $password = test_input($_POST['passLogin']);
    require_once('./mysqli_connect.php');
    $query = "SELECT * FROM zaposlenici where KorisnickoIme='$username' and Sifra='$password'";
    $stmt = mysqli_query($dbc, $query);
    if($stmt)
    {
      $response = @mysqli_fetch_assoc($stmt);
      if($response['KorisnickoIme'] == $username and $response['Sifra'] == $password)
      {
        header('Location: '.'sobe.php');
        mysqli_free_result($stmt);
        mysqli_close($dbc);
        die();
      } else {
        header("HTTP/1.1 401 Unauthorized");
        readfile('404.php');
        mysqli_free_result($stmt);
        mysqli_close($dbc);
        die();
      }
      
    } else {
      echo 'query nije uspio';
    }
    }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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
        <li class="nav-link"><a href="index.php">Početna</a></li>
        <li class="nav-link"><a href="#">O nama</a></li>
        <li class="nav-link"><a href="#">Rezervacije</a></li>
        <li class="nav-link"><a id="login-dugme" type="button" data-toggle="modal" data-target="#loginModal">Prijava</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="sadrzaj">
<div class="container-fluid" id="carousel-wrapper">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/public/images/hotel-slika-1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Hotel 1</h3>
        <p>Lorem Ipsum</p>
      </div>
    </div>


    <div class="item">
      <img src="/public/images/hotel-slika-2.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Hotel 2</h3>
        <p>Lorem Ipsum</p>
      </div>
    </div>

    <div class="item">
      <img src="/public/images/hotel-slika-3.jpg"" alt="Flower">
      <div class="carousel-caption">
        <h3>Hotel 3</h3>
        <p>Lorem Ipsum</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container-fluid tri-kvadrata">
  <div class="kvadrat" id="restoran">
    <div class="sjena">
      <h4 class="text-center kvadrat-naslov">Restoran</h4>
    </div>
  </div>
  <div class="kvadrat" id="bar">
    <h4 class="text-center  kvadrat-naslov">Bar</h4>
  </div>
    <div class="kvadrat" id="sauna">
    <h4 class="text-center  kvadrat-naslov">Sauna</h4>
  </div>
</div>
<div class="container-fluid tri-kvadrata">
  <div class="kvadrat"  id="bazen">
    <h4 class="text-center kvadrat-naslov">Bazen</h4>
  </div>
  <div class="kvadrat" id="sastanci">
    <h4 class="text-center kvadrat-naslov">Sastanci</h4>
  </div>
  <div class="kvadrat" id="galerija">
    <h4 class="text-center kvadrat-naslov">Galerija</h4>
  </div>
</div>
</div>
</div>
<div id=footer>
 <h3 class="text-center">Lorem Ipsum Lorem Ipsum Lorem Ipsum</h3>
</div>
<div id="loginModal" class="modal fade" role="dialog">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <h2 class="modal-heading text-center">Prijava</h2>
        <br />
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center" method="post">
          <label for="unmLogin">Korisničko ime:</label>
          <input type="text" class="form-control" name="unmLogin" id="unmLogin" required>
          <br />
          <label for="passLogin">Šifra:</label>
          <input type="password" class="form-control" name="passLogin" id="passLogin" required>
          <br />
          <input class="dugme" type="submit">
          </form>
      </div>
    </div>
  </div>
</div>


<script src="/public/javascripts/index.js"></script>

</body>
</html>
