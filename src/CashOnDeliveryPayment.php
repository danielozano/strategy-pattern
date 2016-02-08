<?php
// src/CashOnDeliveryPayment.php

namespace Strategy;

class CashOnDeliveryPayment implements PaymentMethodInterface
{
	public function pay($ammount, $tax = '7')
	{
		$total = $ammount + ($ammount * $tax / 100);
		return $total;
	}
}