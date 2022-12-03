<?php
require_once './src/model/back/transactions.php';

function transactions()
{
    $datas = getTransactions();

    require './src/view/back/transactions.php';
}