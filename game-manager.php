<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Game Manager</title>
		<!-- linking to a normalize css file -->
		<link rel="stylesheet" href="css/normalize.css">
	</head>
	<body>
		<header>
			<!-- describing my program -->
			<h1>Game Manager</h1>
			<p>A resource that can keep track of video games you own</p>
		</header>
		<main>
			<!-- building my form -->
			<form method="post" action ="save-games.php">
				<fieldset>
					<label for="title"> Title: </label>
					<input name="title" id ="title" required placeholder="Game title"/>
				</fieldset>
				<fieldset>
					<label for="year">Year: </label>
					<input name="year" id="year" type="number" min="1970" placeholder="Release year"/>
				</fieldset>
				<fieldset>
					<label for="publisher">Publisher: </label>
					<input name="publisher" id="publisher" placeholder="Publisher"/>
				</fieldset>
				<fieldset>
					<label for="system">System: </label>
					<select id="system" name="system">
					<?php
					// connect to db
					$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006_a1_dj' 'bd94148497bd9c', '3ffa9492');
					// store results
					$sql = "SELECT system FROM games GROUP BY system ORDER BY system";
					$cmd= $conn->prepare($sql);
					$cmd->excute();
					$system = $cmd->fetchAll();
					foreach($system as system) {
						// display each artist inside <option></option> tags
						echo '<option>' . $system['system'] . '</option>';
					}
					// disconnect
					$conn = null;
					?>
				</select>
				<button>Save</button>
		</main>
		<footer>
			All Rights Reserved | COMP 1006 Assignment 1
		</footer>
	</body>
</html>
