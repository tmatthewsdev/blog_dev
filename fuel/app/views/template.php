<html>
  <head>
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
  </body>
</html>