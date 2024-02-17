<?php
include_once("PiggyBank.php");

echo "Start with $20:";
$piggyBank = new PiggyBank(20);
print_r("</br>");
$cashRegister = new CashRegister(20);
print_r("</br>");
print_r($piggyBank);
print_r("</br>");
print_r($cashRegister);
print_r("</br>");
print_r("</br>");

echo "Add $10:";
$piggyBank->addMoney(10);
print_r("</br>");
$cashRegister->addMoney(10);
print_r("</br>");
print_r($piggyBank);
print_r("</br>");
print_r($cashRegister);
print_r("</br>");
print_r("</br>");

echo "Remove $5:";
print_r("</br>");
print_r("</br>");
$piggyBank->removeMoney(5);
$cashRegister->removeMoney(5);
print_r("</br>");
print_r($piggyBank);
print_r("</br>");
print_r($cashRegister);
print_r("</br>");
print_r("</br>");

echo "Remove $70: </br>";
print_r("</br>");
$piggyBank->removeMoney(70);
print_r("</br>");
$cashRegister->removeMoney(70);
print_r("</br>");
print_r($piggyBank);
print_r("</br>");
print_r($cashRegister);
print_r("</br>");
print_r("</br>");

echo "Break the piggy bank:</br>";
print_r("</br>");
$piggyBank->breakBank();
print_r("</br>");
print_r($piggyBank);
