<?php

require_once('create.php');

$host       = "localhost";
$database   = "Reserveringssysteem";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());

$query =  "INSERT INTO booking(`sex`,`kind`,`datepicker`,`day_time`,`bsn_number`,`address`,`residence`,`postal_code`,`birthplace`,`phone_number`,`notes`)
    VALUES ('".$sex."', '".$kind."', '".$datepicker."', '".$day_time."', '".$bsn_number."', '".$address."' , '".$residence."' , '".$postal_code."', '".$birthplace."', '".$phone_number."', '".$notes."')";


$result = mysqli_query($db, $query) or die('Error: '. $query);

        mysqli_close($db);

?>
