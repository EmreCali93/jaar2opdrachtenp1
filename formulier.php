<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
<html lang="nl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Formuliere</title>
</head>
<body>
<h3>Op deze pagina kunt u uw gegevens invullen en versturen.</h3>
<form action="FormulierAfhandeling.php" method="post">
<p>Voornaam: <input name="VoorNaam" type="text" size="30" maxlength="80"></p>
<p>Achternaam: <input name="AchterNaam" type="text" size="30" maxlength="80"></p>
<p>Email: <input name="EmailAdres" type="text" size="30" maxlength="80"></p>
<p>Bericht: <textarea name="BeRicht" style="width: 250px; height: 40px;"></textarea></p>
<p><input name="Submit" type="submit"></p>
</form>
</body>
</html>
