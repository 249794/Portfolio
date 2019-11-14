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
		<div class="skills">
			<h1>Skills</h1>
			<p>Klein beetje ervaring met PHP. Gemiddelde met HTML/CSS. Miniscuul veel over C# en Javascript.</p>


		</div>
		<div class="projecten">

			    <?php
			    include 'DB/config.database.inc.php';

			    $link = mysqli_connect($db['server'], $db['user'], $db['password'], $db['database']);

			    $query = "SELECT * FROM Projecten";
		        $presult = mysqli_query($link, $query);

			    while ($row = mysqli_fetch_array($presult)) { 
			    	$image = 'data:image;base64,' . $row['Image'];?>
			    	<form class="paneel" method="POST" action="index.php?page=Beheerproduct&Productid=<?php echo $row['Id']; ?>">
			    		<table>
			    			<tr>
			    				<td><img src="<?php echo $image ?>" width="80" height="70"></td>
			    				<td height="50" width="100"><?php echo $row['Projectnaam']; ?></td>
			    				<td><?php echo $row['Description']; ?></td>
			    		    </tr>
			    		</table>
			    	</form>
	   <?php    } ?>
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