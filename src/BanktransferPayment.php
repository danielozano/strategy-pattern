<?php
// src/BanktransferPayment.php

namespace Strategy;

class BanktransferPayment extends PaymentMethodInterface
{
	public function pay($ammount, $tax = '7')
	{
		$total = $ammount + ($ammount * $tax / 100);
		return $total;
	}
}