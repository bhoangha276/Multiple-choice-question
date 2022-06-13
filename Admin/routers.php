<?php
	switch ($controller) {
        case 'login': {
            require_once('Controllers/login/index.php');
            break;
        }

		case 'user': {
				require_once('Controllers/user/index.php');
				break;
			}

			case 'class': {
			    require_once('Controllers/class/index.php');
			    break;
			}

			case 'subject': {
			    require_once('Controllers/subject/index.php');
			    break;
			}

			case 'exam': {
			    require_once('Controllers/exam/index.php');
			    break;
			}

		case 'question': {
				require_once('Controllers/question/index.php');
				break;
			}

		default: {
				require_once('Controllers/user/index.php');
				break;
			}
	}
?>