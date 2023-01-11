<?php

include_once __DIR__ . '/User.php';
include_once __DIR__ . '/CreditCard.php';
include_once __DIR__ . '/AnimalProducts';
include_once __DIR__ . '/Size.php';
include_once __DIR__ . '/Allergy.php';
include_once __DIR__ . '/Cibo.php';
include_once __DIR__ . '/Cucce.php';
include_once __DIR__ . '/Collari.php';
include_once __DIR__ . '/Cuscini.php';
include_once __DIR__ . '/UserRegistered.php';
include_once __DIR__ . '/GuestUser.php';




$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$name = $_POST['name'] ?? '';
$address = $_POST['address'] ?? '';

$number = $_POST['number'] ?? '';
$expiryYear = $_POST['expiryYear'] ?? '';
$expiryMonth = $_POST['expiryMonth'] ?? '';

$creditCard = new CreditCard($number, $expiryYear, $expiryMonth);

if ($username && $password) {
    $user = new UserRegistered($username, $password);
} else {
    $user = new GuestUser($name, $address, $creditCard);
}
