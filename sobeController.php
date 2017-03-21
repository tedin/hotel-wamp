<?php
$brSobe = ($_POST['brojSobe']);
require_once('./mysqli_connect.php');
$queryZaSobu = @mysqli_query($dbc,"select * from sobe where BrSobe=$brSobe");
while($red = mysqli_fetch_assoc($queryZaSobu))
{
    print_r(json_encode($red));
}

?>