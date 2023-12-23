<?php


class Payment
{
    public function startPayment($bankName)
    {
        if($bankName == 'Ahly') {
            return new Ahly();
        } elseif ($bankName == 'Masr') {
            return new Masr();
        } elseif ($bankName == 'QNB') {
            return new Qnb();
        } elseif ($bankName == 'QNB') {
            return new Qnb();
        }
    }
}
