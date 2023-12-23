<?php

class Cib implements PaymentInterface
{
    public function deposit()
    {
        echo "cib Bank Deposit inprogress";
        echo "<br>";
    }

    public function withdraw()
    {
        echo "cib Bank Withdraw inprogress";
        echo "<br>";
    }

}
