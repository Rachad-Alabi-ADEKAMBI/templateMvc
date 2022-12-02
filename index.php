<?php
session_start();

require_once 'src/controllers/front/home.php';
require_once 'src/controllers/front/login.php';
require_once 'src/controllers/back/dashboard.php';
require_once 'src/controllers/back/buy.php';
require_once 'src/controllers/front/register.php';

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'loginPage') {
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
    } elseif ($_GET['action'] === 'dashboard') {
        dashboard();
    } elseif ($_GET['action'] === 'buy') {
        buy();
    } elseif ($_GET['action'] === 'home') {
        home();
    } elseif ($_GET['action'] === 'contact') {
        // contact();
    } elseif ($_GET['action'] === 'register') {
        register();
    } else {
        echo 'Error 404 : Page not found.';
    }
} else {
    home();
}