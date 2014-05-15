
	<?= Html::anchor('/', 'Back to index') ?>
	<hr>
	
	<h1>blog/view</h1>
	<hr>


	<h2><?= $post->title ?></h2>
	<p><?= $post->content ?></p>
	<span><?= $post->date("Y-m-d H:i:s") ?></span>
	<hr>

	
	<h3>Comments</h3>

	<?= Form::open() ?>

		<textarea name="comment"></textarea>
		<br>
		<button type="submit">Post Comment</button>

	<?= Form::close() ?>



	<hr>

	<?php foreach ($post->comments as $comment): ?>

		<div>
			<p><?= $comment->text ?></p>
			<span><?= $comment->created_at ?></span>
		</div>

	<?php endforeach; ?>