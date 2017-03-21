<?php
require_once("./mysqli_connect.php");

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;

}
$ime = $_POST["unmLogin"];
$pass = $_POST["passLogin"];
$query = "SELECT * FROM korisnici WHERE korisnickoime = 'test' ";
$response = @mysqli_query($dbc, $query);
if($response)
{
    /*echo '<table align="left" cellspacing="5"
    cellpadding="8">
    <tr>
    <td align="left">ID</td>
    <td align="left">Korisnicko ime</td>
    </tr>';*/

    /*while($row = mysqli_fetch_array($response))
    {
        echo '<tr><td align="left">' . $row['korisnikID'] . '</td>
        <td align="left">' . $row['korisnickoime'] . "</td></tr>";

    }*/
    //echo '</table>';
    $row = mysqli_fetch_array($response);
    $json = new stdClass();
    $json->ime = "damir";
    $json->prezime = "selmin";
    $zaSlanje = json_encode($json);
    /*print_r($row["korisnikID"]);
    print_r($row["korisnickoime"]);*/
    print("proslo");
}
else
{
    echo 'Upit se nije izvrsio';
    echo mysql_error($dbc);
}
mysqli_close($dbc);
//echo "ispisano";
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
