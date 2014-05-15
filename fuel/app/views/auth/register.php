
	<?= Form::open(['action' => 'auth/register']) ?>

		<input name="email" type="text" placeholder="email">
		<input name="password" type="password" placeholder="password">
		<button type="submit">Register</button>

	<?= Form::close() ?>