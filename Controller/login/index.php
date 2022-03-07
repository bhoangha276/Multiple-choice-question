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
        case 'register': {

            require_once('View/login/register.php');
            break;
        }

        default: {
            if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if($db->Login($username, $password)) {
                    $success[] = 'login_success';
                    header('location: /multiple-choice-quiz/');
                    // echo '<script type="text/javascript">
                    // location.replace("/multiple-choice-quiz/");
                    // </script>';
                }
            }

            require_once('View/login/index.php');
            break;
        }
    }
?>