<?php require '../includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require 'meta.php'; ?>

		<title>
			F20EC Test
		</title>
	</head>

	<body>
		<?php require 'nav.php'; ?>

		<header>

		</header>

		<main class="page-sizings">
			<section class="main-sec">
				<strong>Create account</strong>
				<form method="POST" action="api/create-account.php">
					<label>Username</label>
					<input name="user" type="text" placeholder="Username"/>
					<label>Password</label>
					<input name="pass" type="password" placeholder="Password"/>
					<input name="submit" type="submit" Value="Create account">
				</form>
			</section>

			<section class="main-sec">
				<strong>Sign in</strong>
				<form method="POST" action="api/sign-in.php">
					<label>Username</label>
					<input name="user" type="text" placeholder="Username"/>
					<label>Password</label>
					<input name="pass" type="password" placeholder="Password"/>
					<input name="submit" type="submit" Value="Sign in">
				</form>
			</section>

			<section class="main-sec">
				<strong>Sign out</strong>
				<form method="POST" action="api/sign-out.php">
					<input name="submit" type="submit" Value="Sign out">
				</form>
			</section>
		</main>

		<footer>
			<?php require 'footer.php'; ?>
		</footer>
	</body>
</html>
