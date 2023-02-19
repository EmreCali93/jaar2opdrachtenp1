<!DOCTYPE html>
<html lang="nl">
	<head>
	</head>
<body>

<h2>Registratie</h2>
<h3>Op deze pagina kunt u uw gegevens invullen en versturen.</h3>

<form action="registratievalidatie.php" method="post" id="registratie" novalidate>
	<div>
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
   </div>

	<div>
		<label for="email">Email</label>
		<input type="email" id="email" name="email">
    </div>

	<div>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
    </div>

	<div>
		<label for="password_confirmation">Repeat password</label>
		<input type="password" id="password_confirmation" name="password_confirmation">
    </div>

	<button>Sign up</button>
</form>

</body>
</html>

