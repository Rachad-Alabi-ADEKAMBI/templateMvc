<?php
require_once './src/model/back/editRate.php';

function editRate($id)
{
    $datas = getInfos($id);

    require './src/view/back/editRate.php';
}