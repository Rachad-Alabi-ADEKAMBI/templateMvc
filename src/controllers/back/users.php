<?php
require_once './src/model/back/users.php';

function users()
{
    $datas = getUsers();

    require './src/view/back/users.php';
}