<?php
//frontend para el timeline
?>
<html>
	<head>
		<title>Malvinas 30 : Timeline</title>
		<!-- CSS -->
	<link href="http://veritetimeline.appspot.com/latest/timeline.css" rel="stylesheet">

	<!-- JavaScript -->
	<script type="text/javascript" src="http://veritetimeline.appspot.com/latest/jquery-min.js"></script>
	<script type="text/javascript" src="http://veritetimeline.appspot.com/latest/timeline-min.js"></script>
	</head>
	<body>
		<div id="timeline"></div>

		<script>
			$(document).ready(function() {
				var timeline = new VMM.Timeline();
				timeline.init("timeline.json");			
			});
		</script>
	</body>
</html>