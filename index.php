<?php
session_start();

require_once('src/controllers/front/home.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'car') {
    	/*if (isset($_GET['id']) && $_GET['id'] > 0) {
        	$id = $_GET['id'];
        	car($id);
    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
        */
        echo 'car';
	}

	elseif ($_GET['action'] === 'loginPage') {
	//	loginPage();
	}

} else {
	home();
}