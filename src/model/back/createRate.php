<?php
include_once './src/model/model.php';

$pdo = getConnexion();

$buying_price = verifyInput($_POST['buying_price']);
$selling_price = verifyInput($_POST['selling_price']);
$id = verifyInput($_GET['id']);

$req = $pdo->prepare(
    'UPDATE rates SET buying_price = ?, selling_price= ? WHERE id = ?'
);
$affectedLines = $req->execute([$buying_price, $selling_price, $id]);

//  return $affectedLines > 0;
var_dump($affectedLines);