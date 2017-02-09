<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Saving data ...</title>
	</head>
	<body>
		<?php
		// storing my variables
		$title = $_POST['title'];
		$year = $_POST['year'];
		$publisher = $_POST['publisher'];
		// validation
		$ok=true;
		if (empty($title)) {
			echo 'Title is required<br/>';
			$ok=false;
		}
		// setting year restrictions
		if (!empty($year)){
			if ($year <1970) {
				echo 'Year must be 1970 or greater';
				$ok = false;
			}
			if($year > 2017){
				echo 'You can not enter something from 2018 or above yet';
				$ok = false;
			}
			else {
				// converting to integer if decmial is inputed
				$year = intval($year);
			}
		}
		if ($ok==true){

		// connecting to the database
		$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=comp1006_a1_dj' 'bd94148497bd9c', '3ffa9492');
		// sql commands to be used in database
		$sql = "INSERT INTO albums (title, year, publisher) VALUES (:title , :year, :publisher);";
		$cmd = $conn->prepare($sql);
		$cmd->bindParam(':title', $title, PDO::PARAM_STR,50);
		$cmd->bindParam(':year', $year, PDO::PARAM_INT);
		$cmd->bindParam(':publisher', $publisher, PDO::PARAM_STR,50);
		// excute the insert
		$cmd->execute();
		$conn= null;
		echo 'Save Complete';
		}
		?>
	</body>
</html>
