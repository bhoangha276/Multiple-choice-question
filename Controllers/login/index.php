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
        case 'register': {
            if(isset($_POST['register'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $full_name = $_POST['full_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $roleAdmin = $_POST['roleAdmin'];

                if($db->InsertUser($username, $password, $full_name, $email, $phone, $address, $roleAdmin)) {
                    $success[] = 'register';
                }
            require_once('Views/login/register.php');
            break;
        }


        default: {
            if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if($db->Login($username, $password)) {
                    $success[] = 'login_success';
                    header('location: /multiple-choice-question/');
                    // echo '<script type="text/javascript">
                    // location.replace("/multiple-choice-question/");
                    // </script>';
                }
            }

            require_once('Views/login/index.php');
            break;
        }
    }
?>