<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Admin EduChamp : Education</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<?php
        if (isset($_GET['controller'])) {
            $controller = $_GET['controller'];
        } else {
            $controller = '';
        }
        if($controller == 'login') {
            include './Views/inc/content.php';
        }
        else {
            include './Views/inc/navbar.php';
            include './Views/inc/sidebar.php';
            include './Views/inc/content.php';
        }
    ?>


	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src='assets/vendors/scroll/scrollbar.min.js'></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/vendors/chart/chart.min.js"></script>
	<script src="assets/js/admin.js"></script>
	<script src='assets/vendors/calendar/moment.min.js'></script>
	<script src='assets/vendors/calendar/fullcalendar.js'></script>
	<script src='assets/vendors/switcher/switcher.js'></script>
	<script>
		$(document).ready(function() {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listWeek'
				},
				defaultDate: '2019-03-12',
				navLinks: true, // can click day/week names to navigate views

				weekNumbers: true,
				weekNumbersWithinDays: true,
				weekNumberCalculation: 'ISO',

				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [{
						title: 'All Day Event',
						start: '2019-03-01'
					},
					{
						title: 'Long Event',
						start: '2019-03-07',
						end: '2019-03-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-03-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-03-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2019-03-11',
						end: '2019-03-13'
					},
					{
						title: 'Meeting',
						start: '2019-03-12T10:30:00',
						end: '2019-03-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2019-03-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2019-03-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2019-03-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2019-03-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2019-03-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2019-03-28'
					}
				]
			});

		});
	</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>