<?php
// index.php

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$payment = new Strategy\Payment(10);
$payment->setPaymentMethod(new Strategy\CreditCardPayment());
$paid = $payment->pay();
echo "Pagando mediante credit card una cantidad de 10, y el pago total es de {$paid}";