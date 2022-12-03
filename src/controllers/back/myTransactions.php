<?php
require_once './src/model/back/myTransactions.php';

function myTransactions()
{
    $datas = getMyTransactions();

    require './src/view/back/myTransactions.php';
}