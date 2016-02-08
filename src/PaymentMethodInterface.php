<?php
// src/PaymentMethodInterface.php

namespace Strategy;

interface PaymentMethodInterface
{
	public function pay($ammount, $tax);
}