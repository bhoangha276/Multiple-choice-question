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
            $id1_1 = "tbl_classes_users.id_user";
            $id1_2 = "tbl_classes_users.id_class";
            $id2 = "tbl_classes.id";
            $talbe1 = "tbl_classes_users";
            $table2 = "tbl_classes";
            $data = $db->getAllDataByID($table1, $table2, $id_user, $id1_1, $id1_2, $id2);

            require_once('Views/classes/list-class.php');
            break;
        }
    }
?>