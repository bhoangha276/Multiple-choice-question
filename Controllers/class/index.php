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
        case 'search': {
            if(isset($_GET['key_word'])) {
                $key = $_GET['key_word'];
                $tbl = "tbl_classes";
               

                $data_Search = $db->SearchData($tbl, $key);
            }

            require_once('Views/classes/search-class.php');
            break;
        } 

        default: {
            $table = "tbl_classes";
            $data = $db->getAllData($table);
            
            require_once('Views/classes/list-class.php');
            break;
        }
    }
