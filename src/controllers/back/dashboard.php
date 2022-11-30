<?php
require_once './src/model/back/dashboard.php';

function dashboard()
{
    $rates = getRates();
    $infos = getUserInfos($_SESSION['user']['id']);

    require './src/view/back/dashboard.php';
}