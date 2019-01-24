<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $password = $_GET['password']; ?>
    <?php if (empty($_GET["password"]) || $_GET["password"] !== "Boolean") { ?>
				<h1 style="color: green;">Accesso Consentito</h1>
		<?php } else { ?>
				<h1 style="color: red;">Accesso Negato</h1>
		<?php } ?>
  </body>
</html>
