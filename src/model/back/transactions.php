<?php
include_once './src/model/model.php';

function getTransactions()
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT * FROM  transactions ORDER BY id
    DESC');
    $req->execute();

    $datas = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'seller_name' => $row['seller_id'],
            'buyer_name' => $row['buyer_name'],
            'amount' => $row['amount'],
            'comment' => $row['comment'],
        ];

        $datas[] = $data;
    }
    return $datas;
}