<?php
// src/CreditCardPayment.php

namespace Strategy;

class CreditCardPayment implements PaymentMethodInterface
{
	public function pay($ammount, $tax = '2')
	{
		$total = $ammount + ($ammount * $tax / 100);
		return $total;
	}
}