<?php

$date1 = date("d-M-Y");
$date2 = date("d-M-Y");
$date_1 = new DateTime('2026-7-7');
$date_2 = new DateTime('2023-7-7');

$final_date = date_diff($date_1, $date_2);
echo $final_date->format('%y');
?>