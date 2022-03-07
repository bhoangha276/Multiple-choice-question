<?php
    include "Model/DBConfig.php";

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
            require_once('View/users/add-user.php');
            break;
        }
        
        // case 'detail': {

        //     require_once('View/users/detail-user.php');
        //     break;
        // }    

        // case 'edit': {

        //     require_once('View/users/edit-user.php');
        //     break;
        // }

        case 'delete': {
            // require_once('View/users/delete-user.php');
            break;
        }

        case 'search': {

            require_once('View/users/search-user.php');
            break;
        } 

        default: {

            require_once('View/home/index.php');
            break;
        }
    }
?>