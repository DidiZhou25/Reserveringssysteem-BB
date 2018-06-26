<?php

if(isset(
  $_POST['sex'],
  $_POST['kind'],
  $_POST['datepicker'],
  $_POST['day_time'],
  $_POST['bsn_number'],
  $_POST['address'],
  $_POST['residence'],
  $_POST['postal_code'],
  $_POST['birthplace'],
  $_POST['phone_number'],
  $_POST['notes']

)) {
    $sex = $_POST['sex'];
    $kind = $_POST['kind'];
    $datepicker = $_POST['datepicker'];
    $day_time = $_POST['day_time'];
    $bsn_number = $_POST['bsn_number'];
    $address = $_POST['address'];
    $residence = $_POST['residence'];
    $postal_code = $_POST['postal_code'];
    $birthplace = $_POST['birthplace'];
    $phone_number = $_POST['phone_number'];
    $notes = $_POST['notes'];
}
?>
