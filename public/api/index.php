<?php
include 'api.php';

try{
    if(!empty($_GET['demande'])){
        $url = explode ("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        switch($url[0]){

         /*           case "lastSold":
                        getLastSold();
                        break;


                    case "car":
                        if (!empty($url[1])){
                            getCar($url[1]);
                        } else{
                            throw new Exception ("Vous n'avez pas renseigné l'id de la demande");
                        }

                        break;
*/


            default: throw new Exception ("La demande n'est pas valide");
        }
    } else{
        throw new Exception ("Problème de récupération de données. ");
    }
} catch(Exception $e){
    $erreur = [
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];

    print_r($erreur);
}