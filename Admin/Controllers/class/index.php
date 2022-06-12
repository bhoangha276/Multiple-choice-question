<?php

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
            if(isset($_POST['add_class'])) {
                $class_name = $_POST['class_name'];
                $description = $_POST['description'];

                if($db->InsertClass($class_name, $description)) {
                    $success[] = 'add_success';
                }
            }
                require_once('Views/classes/add-class.php');
                break;
            }
        
        case 'detail': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_classes";
                $dataByID = $db->getDataByID($tbl, $id);
            }

                require_once('Views/classes/detail-class.php');
                break;
            }    

        case 'edit': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_classes";
                $dataByID = $db->getDataByID($tbl, $id);

                if(isset($_POST['update_class'])) {
                    // View -> Data
                    $class_name = $_POST['class_name'];
                    $description = $_POST['description'];

                    // Data -> Model
                    if($db->UpdateClass($id, $class_name, $description)) {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=class");
                        </script>';
                    }

                }
            }
                require_once('Views/classes/edit-class.php');
                break;
            }

        case 'delete': {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tbl = "tbl_classes";

                    if($db->DeleteData($id, $tbl)) {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=class");
                        </script>';
                    }
                    else {
                        echo '<script type="text/javascript">
                        location.replace("index.php?controller=class");
                        </script>';
                    }
                }
                // require_once('Views/questions/delete-question.php');
                break;
            }

        case 'search': {
                if(isset($_GET['input'])) {
                    $input = $_GET['input'];
                    $tbl = "tbl_classes";
                    $col = "class_name";

                    $data_Search = $db->SearchData($tbl, $col, $input);
                }

                require_once('Views/classes/search-class.php');
                break;
            } 

        default: {
                $table = "tbl_classes";
                $data = $db->getAllData($table);

                require_once('Views/classes/list-class.php');
                break;
            }
    }
?>