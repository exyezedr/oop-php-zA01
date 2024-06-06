<?php

$dateTime = new DateTime();

// php.ini date.timezone

echo json_encode($dateTime) . "\n";

$dateTime->setTimezone(new DateTimeZone("Asia/Makassar"));

echo json_encode($dateTime) . "\n";

$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
$dateTime->setDate(2025, 01, 01);
$dateTime->setTime(16, 0, 0, 0);

echo json_encode($dateTime) . "\n";

$dateTime->add(new DateInterval("P1Y"));

echo json_encode($dateTime) . "\n";

$dateInterval = new DateInterval("P6M");

$dateInterval->invert = true;
$dateTime->add($dateInterval);

echo json_encode($dateTime) . "\n";
echo json_encode($dateTime->format("d-m-y H:i:s")) . "\n";

$dateTime = DateTime::createFromFormat("Y-m-d H:i:s", "2025-01-01 16:00:00", new DateTimeZone("Asia/Jakarta"));

echo json_encode($dateTime) . "\n";
