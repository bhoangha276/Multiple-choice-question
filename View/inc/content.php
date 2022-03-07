<!-- Content -->
<div class="page-content bg-white">
    <?php
    switch ($controller) {
        case 'login': {
            require_once('Controller/login/index.php');
            break;
        }

        case 'user': {
                require_once('Controller/user/index.php');
                break;
            }

            // case 'class': {
            //     require_once('Controller/class/index.php');
            //     break;
            // }

            // case 'subject': {
            //     require_once('Controller/subject/index.php');
            //     break;
            // }

            // case 'exam': {
            //     require_once('Controller/exam/index.php');
            //     break;
            // }

        case 'question': {
                require_once('Controller/question/index.php');
                break;
            }

        default: {
                require_once('Controller/home/index.php');
                break;
            }
    }
    ?>
</div>
<!-- Content END-->