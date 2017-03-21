<?php
    DEFINE("HOST", "localhost");
    DEFINE("KORISNIK", "root");
    DEFINE("PASSWORD", NULL);
    DEFINE ("BAZAPODATAKA", "hoteldb");
    $dbc = @mysqli_connect(HOST, KORISNIK, PASSWORD, BAZAPODATAKA) 
    OR die("Nemoguce spajanje na bazu podataka <br>" . $dbc->connect_error);
 ?>