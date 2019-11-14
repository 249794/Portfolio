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
		<div class="admin">
<form action="DB/Projectinvoer.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="img">
	<input type="text" name="projectnaamnieuw" placeholder="Naam">
	<textarea name="description" placeholder="Desc"></textarea>
	<input type="submit" name="Verander">
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