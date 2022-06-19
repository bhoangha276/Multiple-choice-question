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
    case 'list-class-profile': {
            $id = 2;

            $table =  "tbl_users";
            $data = $db->getDataByID($table, $id);

            $data_class = $db->getClassesByID($id);

            require_once('Views/profiles/list-class-profile.php');
            break;
        }
    default: {
            $id = 2;

            $table =  "tbl_users";
            $data = $db->getDataByID($table, $id);

            $data_class = $db->getClassesByID($id);
         
            require_once('Views/profiles/index.php');
            break;
        }
}
