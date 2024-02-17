<?php
include_once("CashRegister.php");

class PiggyBank extends CashRegister {
    
    function removeMoney($valueToRemove) {
        echo "You can't remove money from a piggy bank without smashing it.";
    }

    function breakBank() {
        echo "We smashed the Piggy Bank and removed $$this->amountInRegister from inside.";
        $this->amountInRegister = 0;
    }
}

