<?php
include 'api.php';

try {
    if (!empty($_GET['demande'])) {
        $url = explode('/', filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        switch ($url[0]) {
            case 'users':
                getUsers();
                break;

            case 'rates':
                getRates();
                break;

            case 'transactions':
                getTransactions();
                break;

            case 'payments':
                getPayments();
                break;

            case 'totalTransactionsValue':
                getTotalTransactionsValue();
                break;

            case 'pendingTransactions':
                getPendingTransactions();
                break;

            case 'username':
                getUserName();
                break;

            case 'myBalance':
                if (!empty($url[1])) {
                    getMyBalance($url[1]);
                } else {
                    throw new Exception('Please check the id');
                }
                break;

            case 'rateById':
                if (!empty($url[1])) {
                    getRateById($url[1]);
                } else {
                    throw new Exception('Please check the id');
                }
                break;

            case 'buyingRate':
                if (!empty($url[1])) {
                    getBuyingRate($url[1]);
                } else {
                    throw new Exception('Please check the id');
                }
                break;

            case 'userById':
                if (!empty($url[1])) {
                    getUserById($url[1]);
                } else {
                    throw new Exception('Please check the id');
                }
                break;

            case 'historicalOfUser':
                if (!empty($url[1])) {
                    getHistoricalOfUser($url[1]);
                } else {
                    throw new Exception('Please check the id');
                }
                break;

            case 'myTransactions':
                if (!empty($url[1])) {
                    getMyTransactions($url[1]);
                } else {
                    throw new Exception("Vous n'avez pas renseigné l'id");
                }
                break;
            default:
                throw new Exception("La demande n'est pas valide");
        }
    } else {
        throw new Exception('Problème de récupération de données. ');
    }
} catch (Exception $e) {
    $erreur = [
        'message' => $e->getMessage(),
        'code' => $e->getCode(),
    ];

    print_r($erreur);
}