<?php

require_once('database.php');
require_once('userInput.php');

$query =  "INSERT INTO booking(`sex`,`kind`,`datepicker`,`day_time`,`bsn_number`,`address`,`residence`,`postal_code`,`birthplace`,`phone_number`,`notes`)
    VALUES ('".$sex."', '".$kind."', '".$datepicker."', '".$day_time."', '".$bsn_number."', '".$address."' , '".$residence."' , '".$postal_code."', '".$birthplace."', '".$phone_number."', '".$notes."')";

mysqli_query($db, $query) or die('Error: '. $query);

mysqli_close($db);
?>
