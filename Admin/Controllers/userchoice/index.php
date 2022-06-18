<?php
    // include "Models/DBConfig.php";

    $db = new Database;
    $db->connect();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = '';
    }

    $success = array();

    switch ($action) {
        case 'search': {
                if(isset($_GET['input'])) {
                    $input = $_GET['input'];
                    $tbl = "tbl_userchoices";
                    $col = "id_user";

                    $data_Search = $db->SearchData($tbl, $col, $input);
                }

                require_once('Views/userchoices/search-userchoice.php');
                break;
            } 

        default: {
                $table = "tbl_userchoices";
                $data = $db->getAllData($table);

                require_once('Views/userchoices/list-userchoice.php');
                break;
            }
    }
?>