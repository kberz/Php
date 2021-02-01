<?php $auteur = $_POST['auteur'] ?>
<?php if ($auteur == "") {
?>
<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name = "viewport" content="width=device-width"/>
		<link rel="stylesheet" href="style.css">
		<title>Newsletters</title>
	</head>

	<body>
		<div id="block_page">
			<header>
				<div id="titre_principal">
					<div id="logo">
						<h1>Newsletters</h1>
					</div>
				</div>
			</header>

			<div id="banniere_image"></a>
				<div id="banniere_description">

				</div>
			</div>

			<section>
				<article>
					<form method="post" action="formulaire_v2.php">
						<div id="first_part">
							<p>Nom de l'auteur : <input type="text" name="auteur" />  </p>
							<p class="ident">Mail : <input type="text" name="mail" />  </p>
 							<p>Date de l'article : <input type="text" name="date_ecriture" /></p>
 						</div>
 						<div id="second_part">
 							<p class="ident">Article :</p>
 						</div>
 							<p><textarea name="article" rows="30" cols="100"> </textarea></p>
 						<div id="third_part">
 							<p class="ident">Les liens : <input type="text" name="liens" /></p>
 							<p><input id="button" type="submit" value="OK"></p>
 						</div>
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
<?php } else { ?>

<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Newsletters</title>
	</head>

	<body>
		<div id="block_page">
			<header>
				<div id="titre_principal">
					<div id="logo">
						<h1>Newsletters</h1>
					</div>
				</div>
			</header>

			<div id="banniere_image"></a>
				<div id="banniere_description">

				</div>
			</div>

			<section>
				<article>
					<form method="post" action="formulaire_v2.php">
						<div id="first_part">
							<p>Nom de l'auteur est <?php echo $_POST['auteur'] ?>   </p>
							<p>Mail de l'auteur <?php echo $_POST['mail'] ?>  </p>
 							<p>Date de l'article <?php echo $_POST['date_ecriture'] ?> </p>
 						</div>
 						<div id="second_part_v2">
 							<p>Article :</p>
 						</div>
 							<p> <?php echo $_POST['article']?> </p>
 						<div id="third_part">
 							<p>Les liens  <?php echo $_POST['liens'] ?> </p>
 							<p><input type="submit" value="Modifier les entrées"></p>
 							<p><input type="submit" value="Envoyer en temps que Newsletter"></p>
 						</div>
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
<?php } ?>
