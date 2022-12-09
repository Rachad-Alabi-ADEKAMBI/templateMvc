<?php
include_once './src/model/model.php';

function getUsers()
{
    $pdo = getConnexion();

    $req = $pdo->prepare('SELECT * FROM  users
     ORDER BY id
    DESC');
    $req->execute();

    $datas = [];
    while ($row = $req->fetch()) {
        $data = [
            'id' => $row['id'],
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'status' => $row['status'],
            'verification' => $row['verification'],
            'balance' => $row['balance'],
            'role' => $row['role'],
        ];

        $datas[] = $data;
    }
    return $datas;
}