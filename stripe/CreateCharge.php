<?php
  require 'vendor/autoload.php';

  \Stripe\Stripe::setApiKey("sk_test_51H6MhmAVe8NcHqhxaWBKz2HaXBbaqNiYjpSpAVltuC4pmmUfvYaQSFq39kkhczmNgUdQpTx6s36qwWsWN2D7zDgW00IlUihfqr");

  $token = $_POST["stripeToken"];

  $charge = \Stripe\Charge::create([
    "amount" => 1000,
    "currency" => "usd",
    "description" => "Pago di Saldo...",
    "source" => $token
  ]);

  echo "<pre>", print_r($charge), "</pre>";
?>