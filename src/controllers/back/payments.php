<?php
require_once './src/model/back/payments.php';

function payments()
{
    $datas = getPayments();

    require './src/view/back/payments.php';
}