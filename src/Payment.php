<?php
// src/Payment.php

namespace Strategy;

class Payment
{
	private $paymetMethod;
	private $ammount;

	public function __construct($ammount)
	{
		$this->ammount = $ammount;
	}

	public function setPaymentMethod(PaymentMethodInterface $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}

	public function pay()
	{
		if (!$this->paymentMethod) {
			throw new \LogicException('Payment method is not set');
		}

		$ammountPaid = call_user_func_array(array($this->paymentMethod, 'pay'), array('ammount' => $this->ammount));
		return $ammountPaid;
	}
}