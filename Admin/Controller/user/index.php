<?php
    include "Model/DBConfig.php";

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
            if(isset($_POST['add_user'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $roleAdmin = $_POST['roleAdmin'];

                if($db->InsertUser($username, $password, $full_name, $email, $phone, $address, $roleAdmin)) {
                    $success[] = 'add_success';
                }
            }
            require_once('View/users/add-user.php');
            break;
        }
        
        // case 'detail': {

        //     require_once('View/users/detail-user.php');
        //     break;
        // }    

        // case 'edit': {

        //     require_once('View/users/edit-user.php');
        //     break;
        // }

        case 'delete': {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl = "tbl_users";

                if($db->DeleteData($id, $tbl)) {
                    echo '<script type="text/javascript">
                    location.replace("index.php?controller=user");
                    </script>';
                }
                else {
                    echo '<script type="text/javascript">
                    location.replace("index.php?controller=user");
                    </script>';
                }
            }
            // require_once('View/users/delete-user.php');
            break;
        }

        case 'search': {
            if(isset($_GET['input'])) {
                $input = $_GET['input'];
                $tbl = "tbl_users";
                $col = "username";
                $data_Search = $db->SearchData($tbl, $col, $input);
            }

            require_once('View/users/search-user.php');
            break;
        } 

        default: {
            $table = "tbl_users";
            $data = $db->getAllData($table);

            require_once('View/users/list-user.php');
            break;
        }
    }
?>