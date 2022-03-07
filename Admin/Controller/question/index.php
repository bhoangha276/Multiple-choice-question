<?php
    include "Model/DBConfig.php";

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
            if(isset($_POST['add_question'])) {
                $question = $_POST['question'];
                $option_a = $_POST['option_a'];
                $option_b = $_POST['option_b'];
                $option_c = $_POST['option_c'];
                $option_d = $_POST['option_d'];
                $answer = $_POST['answer'];

                if($db->InsertQuestion($question, $option_a, $option_b, $option_c, $option_d, $answer)) {
                    $success[] = 'add_success';
                }
            }
                require_once('View/questions/add-question.php');
                break;
            }
        
        case 'detail': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_questions";
                $dataByID = $db->getDataByID($tbl, $id);
            }

                require_once('View/questions/detail-question.php');
                break;
            }    

        case 'edit': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_questions";
                $dataByID = $db->getDataByID($tbl, $id);

                if(isset($_POST['update_question'])) {
                    // View -> Data
                    $question = $_POST['question'];
                    $option_a = $_POST['option_a'];
                    $option_b = $_POST['option_b'];
                    $option_c = $_POST['option_c'];
                    $option_d = $_POST['option_d'];
                    $answer = $_POST['answer'];

                    // Data -> Model
                    if($db->UpdateQuestion($id, $question, $option_a, $option_b, $option_c, $option_d, $answer)) {
                        // header('location: index.php?controller=question');
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=question");
                        </script>';
                    }

                }
            }
                require_once('View/questions/edit-question.php');
                break;
            }

        case 'delete': {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tbl = "tbl_questions";

                    if($db->DeleteData($id, $tbl)) {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=question");
                        </script>';
                    }
                    else {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=question");
                        </script>';
                    }
                }
                // require_once('View/questions/delete-question.php');
                break;
            }

        case 'search': {
                if(isset($_GET['input'])) {
                    $input = $_GET['input'];
                    $tbl = "tbl_questions";
                    $col = "question";

                    $data_Search = $db->SearchData($tbl, $col, $input);
                }

                require_once('View/questions/search-question.php');
                break;
            } 

        default: {
                $table = "tbl_questions";
                $data = $db->getAllData($table);

                require_once('View/questions/list-question.php');
                break;
            }
    }
?>