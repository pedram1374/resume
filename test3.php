<?php

$output = array();

$record = array();
$record['name'] = "نیتروگلیسیرین 2.6";
$record['day'] = "1";
$record['night'] = "1";
$output[] = $record;

$record = array();
$record['name'] = "نیکوراندیل 10";
$record['day'] = "1";
$record['night'] = "1";
$output[] = $record;

$record = array();
$record['name'] = "فاموتیدین 40";
$record['day'] = "0";
$record['night'] = "1";
$output[] = $record;

$record = array();
$record['name'] = "آلوپورینول 100";
$record['day'] = "0";
$record['night'] = "1";
$output[] = $record;

$record = array();
$record['name'] = "ویتامین ب1 300";
$record['day'] = "1";
$record['night'] = "0";
$output[] = $record;

$record = array();
$record['name'] = "آتورواستاتین 20";
$record['day'] = "0";
$record['night'] = "1";
$output[] = $record;

$record = array();
$record['name'] = "آسپیرین 80";
$record['day'] = "1";
$record['night'] = "0";
$output[] = $record;

$record = array();
$record['name'] = "لوزارتان 25";
$record['day'] = "0.5";
$record['night'] = "0";
$output[] = $record;

$record = array();
$record['name'] = "فوروزماید 40";
$record['day'] = "0.5F";
$record['night'] = "0";
$output[] = $record;

$record = array();
$record['name'] = "کارودیلول 6.25";
$record['day'] = "0.5";
$record['night'] = "0.5";
$output[] = $record;

$record = array();
$record['name'] = "مولتی دیلی";
$record['day'] = "1";
$record['night'] = "0";
$output[] = $record;

echo json_encode($output);

?>
