
<body style= "background: grey" /> 
Cet article à été écrit par, <?php echo htmlspecialchars($_POST['auteur']); ?>.<br />
Date d'écriture <?php echo $_POST['date_ecriture']; ?>.<br />
<div id="article" >
<?php echo $_POST['article']; ?><br />
</div>
<?php echo $_POST['liens']; ?>

</body> 