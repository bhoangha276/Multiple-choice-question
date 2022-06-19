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
                $tbl = "tbl_subjects";
               
                $data_Search = $db->SearchData($tbl, $key);
            }

            require_once('Views/subjects/search-subject.php');
            break;
        } 

        default: {
            if(isset($_GET['id'])) {
                $id_class = $_GET['id'];

                $data = $db->getSubjectsByID($id_class);
            }
            
            require_once('Views/subjects/list-subject.php');
            break;
        }
    }
?>