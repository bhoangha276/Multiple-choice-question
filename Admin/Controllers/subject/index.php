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
            if(isset($_POST['add_subject'])) {
                $id_class = $_POST['id_class'];
                $subject_name = $_POST['subject_name'];
                $description = $_POST['description'];
                if($db->InsertSubject($id_class, $subject_name, $description)) {
                    $success[] = 'add_success';
                }
            }
                require_once('Views/subjects/add-subject.php');
                break;
            }
        
        case 'detail': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_subjects";
                $dataByID = $db->getDataByID($tbl, $id);
            }

                require_once('Views/subjects/detail-subject.php');
                break;
            }    



        
       
        case 'edit': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_subjects";
                $dataByID = $db->getDataByID($tbl, $id);

               
                $table = "tbl_classes";
                $classes = $db->getAllData($table);

                if(isset($_POST['update_subject'])) {
                    // View -> Data
                    $id_class = $_POST['id_class']; 
                    $subject_name = $_POST['subject_name'];
                    $description = $_POST['description'];

                    

                    // Data -> Model
                    if($db->UpdateSubject($id, $id_class, $subject_name, $description)) {
                        // header('location: index.php?controller=question');
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=subject");
                        </script>';
                    }

                }
            }
                require_once('Views/subjects/edit-subject.php');
                break;
            }

        case 'delete': {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tbl = "tbl_subjects";

                    if($db->DeleteData($id, $tbl)) {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=subject");
                        </script>';
                    }
                    else {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=subject");
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
                $table = "tbl_subjects";
                $data = $db->getAllData($table);

                require_once('Views/subjects/list-subject.php');
                break;
            }
    }
?>