	
	<h1>blog/index</h1>
	<hr>


	<?php foreach ($posts as $post): ?>

	<h2><?= Html::anchor($post->url(), $post->title) ?></h2>
	<p><?= $post->content ?></p>
	<span><?= $post->date("Y-m-d H:i:s") ?></span>
	<hr>

	<?php endforeach; ?>

	