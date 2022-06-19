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
            if(isset($_GET['id'])) {
                $id_exam = $_GET['id'];
                $limit = 5;

                $dataByID = $db->getRandomQuestion($id_exam, $limit);
            }

            require_once('Views/exams/detail-exam.php');
            break;
        }

        case 'answer': {
            require_once('Views/exams/answer-exam.php');
            break;
        }

        default: {
            $id_user = 2;

            if(isset($_GET['id'])) {
                $id_subject = $_GET['id'];

                $data = $db->getExamsByID($id_user, $id_subject);
            }

            require_once('Views/exams/list-exam.php');
            break;
        }
    }
?>