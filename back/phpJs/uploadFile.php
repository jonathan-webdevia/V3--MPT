<?php

/**
 ************* LISTE DES CODES ERREURS *************
 *
 *  *   |***************|**********************|  *
 *  *   |200            | Succès               |  *
 *  *   |[403 ==> 001]  | Fichier inexistant   |  *
 *  *   |[403 ==> 002]  | Fichier non recup    |  *
 *  *   |[403 ==> 003]  | Type mime incorrect  |  *
 *  *   |[403 ==> 004]  | Fichier trop lourd   |  *
 *  *   |***************|**********************|  *
 * 
 ***************************************************
 */



session_start();
require('../back/settings.php');

$response = [];

if (!empty($_FILES)) {
    if (array_key_exists('tpImg', $_FILES)) {
        if (in_array(mime_content_type($_FILES['tpImg']['tmp_name']), ['image/png', 'image/jpeg'])) {
            if ($_FILES['tpImg']['size'] <= 2048000000) {

                $imageFileName = uniqid() . '.' . pathinfo($_FILES['tpImg']['name'], PATHINFO_EXTENSION);
                array_push($response, ['200' => $imageFileName]);

                switch ($_GET['type']) {
                    case 'travel':
                        $req = "INSERT INTO travelsimg (name, travelplan) VALUES (?, ?)";
                        $query = $bdd->prepare($req);
                        $query->execute([
                            $imageFileName,
                            3
                        ]);
                        break;
                    
                    default:
                        # code...
                        break;
                }

                move_uploaded_file($_FILES['tpImg']['tmp_name'], '../../file/upload/' . $imageFileName);
            } else {
                array_push($response, ['403' => '004']);
            }
        } else {
            array_push($response, ['403' => '003']);
        }
    } else {
        array_push($response, ['403' => '002']);
    }
} else {
    array_push($response, ['403' => '001']);
}

echo json_encode($response);