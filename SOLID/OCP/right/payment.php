<?php


class Payment
{
    private $bankPayment ;

    public function __construct(PaymentInterface $bankName)
    {
        $this->bankPayment = $bankName ;
    }

    public function startPayment()
    {
        return  $this->bankPayment ;
    }
}
