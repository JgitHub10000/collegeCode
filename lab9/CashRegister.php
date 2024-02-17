<?php
class CashRegister {

    protected $amountInRegister;

    function __construct($amountInRegister) {
        $this->amountInRegister = $amountInRegister;
    }

    function __destruct() {
    }

    function set_amountInRegister($amountInRegister) {
        $this->amountInRegister = $amountInRegister;
    }
    
    function get_amountInRegister() {
        return $this->amountInRegister;
    }

    function addMoney($valueToAdd) {
        $this->amountInRegister = $this->amountInRegister + $valueToAdd;
    }

    function removeMoney($valueToRemove) {
        if ($valueToRemove > $this->amountInRegister) {
            echo "You can't remove that much money.";
        } else {
            $this->amountInRegister = $this->amountInRegister - $valueToRemove;
        }
    }
}
