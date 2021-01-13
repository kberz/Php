<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>News Letter</title>
	</head>

	<body>
		<div id="block_page">
			<header>
				<div id="titre_principal">
					<div id="logo">
						<h1>News letter</h1>
					</div>
				</div>
			</header>

			<div id="banniere_image"></a>
				<div id="banniere_description">
					
				</div>
			</div>

			<section>
				<article>
					<form method="post" action="traitement.php">
						<p>Nom de l'auteur : <input type="text" name="auteur" />  </p>
 						<p>Date de l'article: <input type="text" name="date_ecriture" /><br /><br />Article:</p>
 						<p><textarea name="article" rows="30" cols="100"> </textarea></p> 
 						<p>Les liens : <input type="text" name="liens" /></p>
 						<p><input type="submit" value="OK"></p>
					</form>
					
				</article>
					<aside>
						
					</aside>
			</section>

			<footer>
					
			</footer>
		</div>
	</body>
</html>