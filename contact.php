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
		<div class="Contact">
			<form action="stuur.php" method="POST">
				<h1>Contact</h1>
        <div>
            <label>Naam<span></span></label>
            <input type="text" name="PName" placeholder="Naam">
        </div>
        <div>
            <label>Email<span></span></label>
            <input type="text" name="PEmail" placeholder="Email">
        </div>
        <div>
            <label>Onderwerp<span></span></label>
            <input type="text" name="PSubject" placeholder="Onderwerp">
        </div>
        <div>
            <label>Bericht<span></span></label>
            <textarea name="PMessage" placeholder="Bericht"></textarea>
        </div>
        <input type="submit" name="submit" value="Verzenden">
    </form>
		</div>
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