
	<h1>My Blog</h1>
	<hr>

	<?php foreach ($posts as $post): ?>

	<h3><?= $post->title ?></h3>
	<p><?= $post->content ?></p>
	<span><?= $post->date() ?></span>
	<hr>

	<?php endforeach; ?>