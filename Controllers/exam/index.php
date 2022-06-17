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
        case 'detail': {
            require_once('Views/exams/detail-exam.php');
            break;
        }

        case 'answer': {
            require_once('Views/exams/answer-exam.php');
            break;
        }

        default: {
            $id_user = 2;

            $id_subject = 1;
            $data = $db->getExamsByID($id_user, $id_subject);

            require_once('Views/exams/list-exam.php');
            break;
        }
    }
?>