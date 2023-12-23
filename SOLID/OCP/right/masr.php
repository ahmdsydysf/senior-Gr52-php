<?php


class Masr implements PaymentInterface
{
    public function deposit()
    {
        echo "Masr Bank Deposit inprogress";
        echo "<br>";
    }

    public function withdraw()
    {
        echo "Masr Bank Withdraw inprogress";
        echo "<br>";
    }

}
