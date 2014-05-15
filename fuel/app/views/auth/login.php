
	<?= Form::open(['action' => 'auth/login']) ?>

		<input name="email" type="text" placeholder="email">
		<input name="password" type="password" placeholder="password">

	<?= Form::close() ?>