<!-- MAIN CONTAINER START -->
<?php 
	if($controller == 'login') {
		require_once('routers.php');
	}
	else {
		echo'<main class="ttr-wrapper">
			<div class="container-fluid">';
				require_once('routers.php');
		echo'</div>
		</main>';
	}
?>
<!-- MAIN CONTAINER END -->
<div class="ttr-overlay"></div>