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

  	<div>
		<?php if (isset($user)): ?>
		<?= $user->email ?> | <?= Html::anchor('auth/logout', 'Logout') ?>

		<?php else: ?>
		<?= Html::anchor('auth/register', 'Register') ?> or <?= Html::anchor('auth/login', 'Login') ?>

		<?php endif; ?>
	</div>

	<?= isset($body) ? $body : null ?>
>>>>>>> 63e5b25892f59a1a010792f168d386ed8cc46f4c
  </body>
</html>