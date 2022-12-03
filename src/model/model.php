<?php

function getConnexion()
{
    return new PDO(
        'mysql:host=localhost; dbname=rapidnote; charset=UTF8',
        'root',
        ''
    );
}