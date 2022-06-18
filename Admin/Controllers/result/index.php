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
                    $tbl = "tbl_results";
                    $col = "number_correct";

                    $data_Search = $db->getResults  ($tbl, $col, $input);
                }

                require_once('Views/results/search-result.php');
                break;
            } 

        default: {
               
                $data = $db->getResults();

                require_once('Views/results/list-result.php');
                break;
            }
    }
?>