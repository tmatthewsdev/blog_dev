
	<?= Html::anchor('/', 'Back to index') ?>
	<hr>
	
	<h1>blog/view</h1>
	<hr>


	<h2><?= Html::anchor($post->url(), $post->title) ?></h2>
	<p><?= $post->content ?></p>
	<span><?= $post->date("Y-m-d H:i:s") ?></span>
	<hr>

	