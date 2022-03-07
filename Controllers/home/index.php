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
            require_once('Views/users/add-user.php');
            break;
        }
        
        // case 'detail': {

        //     require_once('Views/users/detail-user.php');
        //     break;
        // }    

        // case 'edit': {

        //     require_once('Views/users/edit-user.php');
        //     break;
        // }

        case 'delete': {
            // require_once('Views/users/delete-user.php');
            break;
        }

        case 'search': {

            require_once('Views/users/search-user.php');
            break;
        } 

        default: {

            require_once('Views/home/index.php');
            break;
        }
    }
?>