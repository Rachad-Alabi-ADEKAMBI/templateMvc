<?php
include_once './src/model/model.php';

function getMyTransactions()
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT * FROM  transactions WHERE seller_id = ? OR
    buyer_id = ?');
    $req->execute([$_SESSION['user']['id'], $_SESSION['user']['id']]);

    $datas = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
        ];

        $rates[] = $data;
    }
    return $datas;
}