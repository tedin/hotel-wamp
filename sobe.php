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

require_once('./mysqli_connect.php');
$stringZaSobe = '';
$queryZaLokaciju = "select lokacija from hoteli where Lokacija='Sarajevo'";
$queryZaSobe = "select BrSobe from sobe";
$sobe = @mysqli_query($dbc, $queryZaSobe);
while($sobeArray = mysqli_fetch_assoc($sobe)) 
{
  $stringZaSobe.="<button type='button' class='dugme-soba-slobodna' onclick='infoSoba(".$sobeArray['BrSobe'].")'>".$sobeArray['BrSobe']."</button>";
}
mysqli_free_result($sobe);
//$queryZaSobu= "select * from sobe where BrSobe="
$stmt = @mysqli_query($dbc, $queryZaLokaciju);
$response = mysqli_fetch_assoc($stmt);
$imeHotela = $response['lokacija'];
mysqli_free_result($stmt);


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
  <h2 class="text-center sobe-naslov">Hotel <?php echo $imeHotela?></h2> <!--OVDJE QUERY ZA IME HOTELA-->
  <div class="lista-soba container-fluid"> <!-- SVE SOBE U HOTELU, SVE UNUTAR OVOG DIVA TREBA GENERISATI PHP-OM -->
    <div class="sprat-soba row"> <!-- WRAPPER ZA SOBE KOJE SU NA ISTOM SPRATU -->
      <div class="col-sm-2 text-center"><?php echo $stringZaSobe ?> <!-- WRAPPER ZA BUTTON OD SOBE -->
        <!-- BUTTON ZA SOBU, AKO JE SLOBODNA ONDA JE KLASA dugme-soba-slobodna A
        KAD SE GOST PRIJAVI U SOBU ONDA MIJENJA KLASU U dugme-soba-zauzeta, NA
        CHECK OUTU OBRATNO -->
        <!-- ONCLICK POZIVA INFOSOBA(BROJSOBE) -->
        
        <!--<button type="button" class="dugme-soba-slobodna" onclick="infoSoba(101)">101</button>-->
      </div>
    </div>
  </div>
</div>
<div id=footer>
 <h3 class="text-center">Lorem Ipsum Lorem Ipsum Lorem Ipsum</h3>
</div>

<div id="info-modal" class="modal fade" role="dialog">
  <div class="vertical-alignment-helper">
    <div class="modal-dialog vertical-align-center">
      <div class="modal-content">
        <h2 class="modal-heading text-center">Soba </h2>
        <div class="modal-body text-center" id="info-modal-body"></div>
        <div class="text-center" id="info-modal-footer"></div>
      </div>
    </div>
  </div>
</div>

<script src="/public/javascripts/sobe.js"></script>

</body>
</html>
