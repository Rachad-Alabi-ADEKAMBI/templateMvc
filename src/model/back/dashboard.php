<?php
include_once './src/model/model.php';

function getRates()
{
    $pdo = getConnexion();

    $req = $pdo->query('SELECT *  FROM rates ORDER BY id ASC');

    $rates = [];
    while ($row = $req->fetch()) {
        $data = [
            'buying_price' => $row['buying_price'],
            'name' => $row['name'],
            'selling_price' => $row['selling_price'],
            'image' => $row['image'],
            'id' => $row['id'],
        ];

        $rates[] = $data;
    }
    return $rates;
}

function getUserInfos($id)
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT *  FROM users
    WHERE id = ?');
    $req->execute([$id]);

    $infos = [];
    while ($row = $req->fetch()) {
        $data = [
            'balance' => $row['balance'],
            'id' => $row['id'],
        ];

        $infos[] = $data;
    }
    return $infos;
}