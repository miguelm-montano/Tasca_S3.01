<?php

require_once 'PaymentGatewayInterface.php';
require_once 'StripePaymentGateway.php';
require_once 'PayPalPaymentGateway.php';
require_once 'BankTransfer.php';
require_once 'PaymentProcessor.php';

$stripe = new StripePaymentGateway();
$stripePayment = new PaymentProcessor($stripe);

echo $stripePayment->procesarPago(100) . PHP_EOL;

$paypal = new PayPalPaymentGateway();
$paypalPayment = new PaymentProcessor($paypal);

echo $paypalPayment->procesarPago(200) . PHP_EOL;

$transfer = new BankTransfer();
$transferPayment = new PaymentProcessor($transfer);

echo $transferPayment->procesarPago(500) . PHP_EOL;

?>