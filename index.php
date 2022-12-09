<?php
session_start();

require_once 'src/controllers/front/home.php';
require_once 'src/controllers/front/login.php';
require_once 'src/controllers/front/register.php';

require_once 'src/controllers/back/dashboard.php';
require_once 'src/controllers/back/buy.php';
require_once 'src/controllers/back/settings.php';
require_once 'src/controllers/back/myTransactions.php';
require_once 'src/controllers/back/sell.php';
require_once 'src/controllers/back/wallet.php';
require_once 'src/controllers/back/transactions.php';
require_once 'src/controllers/back/users.php';
require_once 'src/controllers/back/payments.php';
require_once 'src/controllers/back/editRate.php';

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'login') {
        loginPage();
    } elseif ($_GET['action'] === 'addCategory') {
        /*if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$name = $_GET['name'];

        	addCategory($name, $_POST);
    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
		*/
        //addCategory();
    } elseif ($_GET['action'] === 'editRate') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id = $_GET['id'];

            editRate($id);
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';

            die();
        }
    } elseif ($_GET['action'] === 'dashboard') {
        dashboard();
    } elseif ($_GET['action'] === 'buy') {
        buy();
    } elseif ($_GET['action'] === 'home') {
        home();
    } elseif ($_GET['action'] === 'contact') {
        // contact();
    } elseif ($_GET['action'] === 'settings') {
        settings();
    } elseif ($_GET['action'] === 'myTransactions') {
        myTransactions();
    } elseif ($_GET['action'] === 'register') {
        register();
    } elseif ($_GET['action'] === 'wallet') {
        wallet();
    } elseif ($_GET['action'] === 'sell') {
        sell();
    } elseif ($_GET['action'] === 'users') {
        users();
    } elseif ($_GET['action'] === 'payments') {
        payments();
    } elseif ($_GET['action'] === 'transactions') {
        transactions();
    } else {
        echo 'Error 404 : Page not found.';
    }
} else {
    home();
}