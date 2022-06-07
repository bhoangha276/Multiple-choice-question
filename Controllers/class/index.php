<?php
    // include "Models/DBConfig.php";

    $db = new Database;
    $db->connect();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = '';
    }

    $thanhcong = array();

    switch ($action) {
        case 'add': {
            require_once('Views/classes/add-class.php');
            break;
        }

        default: {
            $id_user = 1;
            $data = $db->getClassesByID($id_user);

            require_once('Views/classes/list-class.php');
            break;
        }
    }
?>