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
			<form method="post" action="register.php">
					<?php echo display_error(); ?>
	<div class="loginBox">
		<img src="img/user.png" class="user">
			<h2> Stwórz konto ! </h2>
				<form action="zaloguj.php" method="post">
					<p> Login </p>
						<input type="text" name="username" placeholder="Podaj login" value="<?php echo $username; ?>" >
							<p>E-mail</p>
								<input type="email" name="email" placeholder="Podaj e-mail" value="<?php echo $email; ?>">
                <p>Hasło</p>
                  <input type="password" name="password_1" placeholder="Podaj hasło">
                  <p>Powtórz hasło</p>
                    <input type="password" name="password_2" placeholder="Powtórz hasło">
									<button type="submit" class="btn" name="register_btn">Zarejestruj się</button>
				</form>
				<p>
					Masz konto ? <a href="login.php">Zaloguj się!</a>
				</p>

</div>
</body>
</htm>
