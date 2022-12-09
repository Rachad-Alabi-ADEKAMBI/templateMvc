<?php

//local

function getConnexion()
{
    return new PDO(
        'mysql:host=localhost; dbname=rapidnote; charset=UTF8',
        'root',
        ''
    );
}

//production
/*
function getConnexion()
{
    return new PDO(
        'mysql:host=localhost; dbname=adra7128_rapidnote; charset=UTF8',
        'adra7128_rapid',
        'adra7128_rapid'
    );
}
*/