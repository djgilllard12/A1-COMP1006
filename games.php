<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Game Manager</title>
		<!-- linking to a normalize css file -->
		<link rel="stylesheet" href="css/normalize.css">
	</head>
	<body>
	<?php
	// connect
	$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006_a1_dj' 'bd94148497bd9c', '3ffa9492');
	$sql = "SELECT gameId, title, year, publisher, system FROM games ORDER BY title";
	$cmd = $conn->prepare($sql);
	$cmd->excute();
	$games = $cmd->fetchAll();
	echo '<table><tr><th>Title</th></tr><th>Year</th><th>Publisher</th><th>System</th></tr>';
	//loop the values
	foreach ($games as $game) {
		echo '<tr><td>' . $game['title'] . '</td>
			<td>' . $game['year'] . '</td>
			<td>' . $game['publisher'] . '</td>
			<td>' . $game['system'] . '</tr>';
	}

	// disconnect
	$conn = null;
	?>
	</body>
<html>
