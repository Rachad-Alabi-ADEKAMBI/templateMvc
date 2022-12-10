<?php
include_once './src/model/model.php';

function getInfos($id)
{
    $pdo = getConnexion();

    $id = $_GET['id'];

    $req = $pdo->prepare('SELECT *  FROM rates WHERE id  = ?
    ');
    $req->execute([$id]);

    $rates = [];
    while ($row = $req->fetch()) {
        $data = [
            'buying_price' => $row['buying_price'],
            'image' => $row['image'],
            'name' => $row['name'],
            'selling_price' => $row['selling_price'],
            'image' => $row['image'],
            'id' => $row['id'],
        ];

        $rates[] = $data;
    }
    return $rates;
}