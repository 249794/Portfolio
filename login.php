<?php 

$login_correct = FALSE;
$login_error = FALSE;

include 'DB/config.database.inc.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) { 
	
	$link = mysqli_connect($db['server'], $db['user'], $db['password'], $db['database']);

	mysqli_set_charset($link, 'latin1');
	$wachtwoord = hash('sha256', $_POST['password']);

	$sql = "SELECT
	`id`
	FROM `users`
	WHERE `Username` = '" . mysqli_real_escape_string($link, $_POST['username']) . "'
    AND `Password` = '" . mysqli_real_escape_string($link, $wachtwoord) . "'
	LIMIT 1";

	$result = mysqli_query($link, $sql);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_row($result);
		$cookie['id'] = $row[0];
		$cookie['password'] = $wachtwoord;
		setcookie('login', serialize($cookie), time() + 60*60*24*7*2, '/');
		$login_correct = TRUE;
	}
	else{
		$login_error = TRUE;
	}
}
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geoffrey Lourens Portfolio - Over Mij</title>
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<nav>
		<div class="nav">
				<img src="Img/logo.svg" alt="Logo">
				<ul class="navilist">
					<li class="navilink"><a href="index.php">Home</a></li>
					<li class="navilink"><a href="skills.php">Skills</a></li>
					<li class="navilink"><a href="overmij.php">Over Mij</a></li>
					<li class="navilink"><a href="contact.php">Contact</a></li>
				</ul>
				<div class="accountnav">
					<a href="login.php">Account</a>
				</div>
			</div>
	</nav>

<div class="container">
	<div class="content">
		<div class="login">
			<form method="POST">
				<?php if ($login_correct === TRUE) { ?>

		            <h1>Inloggen gelukt</h1>
		            <p>U kunt nu verder</p>
		            <a href="admin.php">Admin panel</a>

	                <?php } else { ?>

		            <h1>Login</h1>
		            <p>Vul uw gegevens in.</p>

	                <?php if ($login_error === TRUE) {
		            echo '<p> Er is een verkeerde combinatie.</p>';
	                } ?>

                    <input type="text" name="username" placeholder="Gebruikersnaam">
                    <input type="text" name="password" placeholder="Wachtwoord">
                    <input type="submit" name="submit" value="Login">
                    <?php } ?>
            </form>
		</div>
	</div>
	</div>
<footer>
	<div class="footer-content">
        <p>© Copyright</p> 
    </div>
</footer>
</body>
</html>