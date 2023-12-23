<?php

 
class Ahly implements PaymentInterface
{
    public function deposit()
    {
        echo "Ahly Bank Deposit inprogress";
        echo "<br>";
    }

    public function withdraw()
    {
        echo "Ahly Bank Withdraw inprogress";
        echo "<br>";
    }

}
