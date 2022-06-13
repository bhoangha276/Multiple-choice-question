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
        case 'add': {
            if(isset($_POST['add_exam'])) {
                $id_author = $_POST['id_author'];
                $id_subject = $_POST['id_subject'];
                $exam_name = $_POST['exam_name'];
                $start = $_POST['start'];
                $time = $_POST['time'];
                $number_question = $_POST['number_question'];
                $create_at = $_POST['create_at'];
                if($db->InsertExam($id_author, $id_subject, $exam_name, $start, $time, $number_question, $create_at)) {
                    $success[] = 'add_success';
                }
            }
                require_once('Views/exams/add-exam.php');
                break;
            }
        
        case 'detail': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_exams";
                $dataByID = $db->getDataByID($tbl, $id);
            }

                require_once('Views/exams/detail-exam.php');
                break;
            }    

        case 'edit': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_exams";
                $dataByID = $db->getDataByID($tbl, $id);

                if(isset($_POST['update_exam'])) {
                    // View -> Data
                    $id_author = $_POST['id_author'];
                    $id_subject = $_POST['id_subject'];
                    $exam_name = $_POST['exam_name'];
                    $start = $_POST['start'];
                    $time = $_POST['time'];
                    $number_question = $_POST['number_question'];
                    $create_at = $_POST['create_at'];
                    

                    // Data -> Model
                    if($db->UpdateExam($id, $id_author, $id_subject, $exam_name, $start, $time, $number_question, $create_at)) {
                        // header('location: index.php?controller=question');
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=exam");
                        </script>';
                    }

                }
            }
                require_once('Views/exams/edit-exam.php');
                break;
            }

        case 'delete': {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tbl = "tbl_exams";

                    if($db->DeleteData($id, $tbl)) {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=exam");
                        </script>';
                    }
                    else {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=exam");
                        </script>';
                    }
                }
                // require_once('Views/questions/delete-question.php');
                break;
            }

        case 'search': {
                if(isset($_GET['input'])) {
                    $input = $_GET['input'];
                    $tbl = "tbl_subjects";
                    $col = "subject_name";

                    $data_Search = $db->SearchData($tbl, $col, $input);
                }

                require_once('Views/subjects/search-subject.php');
                break;
            } 

        default: {
                $table = "tbl_exams";
                $data = $db->getAllData($table);

                require_once('Views/exams/list-exam.php');
                break;
            }
    }
?>