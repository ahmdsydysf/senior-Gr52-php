<?php


class QNB implements PaymentInterface
{
    public function deposit()
    {
        echo "QNB Bank Deposit inprogress";
        echo "<br>";
    }

    public function withdraw()
    {
        echo "QNB Bank Withdraw inprogress";
        echo "<br>";
    }

}
