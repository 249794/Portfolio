<?php 

if (isset($_POST['Verander'])) {
	if (!empty($_POST['projectnaamnieuw'])) {
		echo "YEAT";

		include 'config.database.inc.php';
		$link = mysqli_connect($db['server'], $db['user'], $db['password']);
		mysqli_select_db($link, $db['database']);

		$img = addslashes($_FILES['img']['tmp_name']);
		$img = file_get_contents($img);
		$img = base64_encode($img);
			
		$NewProjectnaam = $_POST['projectnaamnieuw'];
		$NewDescription = $_POST['description'];


		$sql = "INSERT INTO `Projecten` SET 
		`Projectnaam` = '" . $NewProjectnaam . "',
		`Description` = '" . $NewDescription . "',
		`Image` = '" . $img ."'";

        mysqli_query($link,$sql);

        
	}
}
?>
