<?php

require_once('database.php');
require_once('userInput.php');

// TODO: 
// 1. make login system
// 2. get all the reservations for the logged in phpversion
// 3. load this file when user clicks on edit from one reservation

$query = 
"UPDATE booking
SET (`sex = '".$sex."'`,`kind = '".$kind."'`,`datepicker = '".$datepicker."'`,`day_time = '".$day_time."'`,`bsn_number = '".$bsn_number."'`,`address`,`residence`,`postal_code`,`birthplace`,`phone_number`,`notes`)
WHERE id = 1";

mysqli_query($db, $query) or die('Error: '. $query);

?>