<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/screen.css">
	<title>Task asesor</title>
</head>

<body>

	<div id="header">
		<div id="logo">Call Assessor</div>
		<p>Welcome to our new Call Assessor Muse Module. The module will provide an assessment of the situation, based on your muse's personality.</p>
	</div>

	<div id="assessment">

		<?php
			/* Data acquisition */
			$assessments = ['?'];
		?>

		<table class="assessment">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Code</th>
					<th>Assessment</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<?php
					/* Data presentation */
					foreach($assessments as $assessment) {
						?>
				<tr>
					<td>?</td>
					<td>?</td>
					<td>?</td>
					<td>?</td>
				</tr>
						<?php
					}
				?>
			</tbody>
		</table>

	</div>

</body>
</html>
