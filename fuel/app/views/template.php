<html>
  <head>
<<<<<<< HEAD
	<title><?= $title ?></title>
  </head>
  <body>
  <?= $body ?>
=======
	<title><?= isset($title) ? $title : 'Default Title' ?></title>
  </head>
  <body>
	<?= isset($body) ? $body : null ?>
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
  </body>
</html>