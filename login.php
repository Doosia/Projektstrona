<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="author" content="Dosia">
        <meta name="author" content="Dosia">
          <title> Witaj uczniu </title>
            <meta name="description" content="Logoowanie się do panelu ucznia.">
              <link rel="stylesheet" href="loginstyl.css" type="text/css" />
</head>
<body>
		<form method="post" action="login.php">
      <div class="bladlog">
   					<?php echo display_error(); ?>
   </div>
	<div class="loginBox">
		<img src="img/user.png" class="user">
			<h2> Witaj ! </h2>
					<p> Login </p>
						<input type="text" name="username" placeholder="Podaj login">
							<p>Hasło</p>
								<input type="password" name="password" placeholder="Podaj haslo">
									<button type="submit" class="btn" name="login_btn">Zaloguj się</button>
				</form>
        <form>
<input type="image" src="img/fb.png">
</form>

				<p>
					Nie masz konta ? <a href="register.php">Zarejestruj się</a>
				</p>

</div>
</body>
</htm>
