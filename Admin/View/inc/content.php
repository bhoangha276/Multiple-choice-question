<!-- MAIN CONTAINER START -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<?php
		if (isset($_GET['controller'])) {
			$controller = $_GET['controller'];
		} else {
			$controller = '';
		}

		switch ($controller) {
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
					require_once('Controller/user/index.php');
					break;
				}
		}
		?>
	</div>
</main>
<!-- MAIN CONTAINER END -->
<div class="ttr-overlay"></div>