<?php

/*require_once("./mysqli_connect.php");
$query = "SELECT * FROM zaposlenici";
$response = @mysqli_query($dbc, $query);
$noviQuery = @mysqli_query($dbc, "SELECT Ime FROM zaposlenici");
$odgovor = mysqli_fetch_object($noviQuery);
//echo $odgovor->Ime;
if($response)
{
    echo '<table align="left" cellspacing="5"
    cellpadding="8">
    <tr>
    <td align="left">ID</td>
    <td align="left">Korisnicko ime</td>
    </tr>';
    $red = mysqli_fetch_assoc($response);
    while($row = mysqli_fetch_object($response))
    {
        echo '<tr><td align="left">' . $row->Ime . '</td>
        <td align="left">' . $row->Prezime . "</td></tr>";
        //print_r($row);
    }
    foreach ($red as $key => $value) {
        echo $key . ": " . $value . "\n" ;
    }
    echo '</table>';
}
else
{
    echo 'Upit se nije izvrsio';
    echo mysqli_error($dbc);
}
mysqli_close($dbc);*/
    require_once('./mysqli_connect.php');
    $query = "SELECT KorisnickoIme,Sifra FROM zaposlenici' WHERE KorisnickoIme=$username AND Sifra=$password";
    $stmt = mysqli_query($dbc, $query);
    if($stmt)
    {
        while($rezultat = mysqli_fetch_assoc($stmt))
    {
        print_r($rezultat); echo'<br>';

    }
    }
     
  
?>
