<?php
include_once './src/model/model.php';

function getPayments()
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT * FROM  payments ORDER BY id
    DESC');
    $req->execute();

    $datas = [];
    while ($row = $req->fetch()) {
        $data = [
            'date' => $row['date_of_insertion'],
            'user_name' => $row['user_name'],
            'amount' => $row['amount'],
            'comment' => $row['comment'],
        ];

        $datas[] = $data;
    }
    return $datas;
}