<?php require_once('includes/temps/header.php'); ?>
<br/>
<a href="<?php echo $this->base->url; ?>" class="btn btn-primary">Return to Post List</a>
<?php foreach($posts as $post): ?>
	<h3>Post #<?php echo $post['id']; ?></h3>
		<?php echo $post['content']; ?>
	<hr/>
<?php endforeach; ?>

<?php require_once('includes/temps/footer.php'); ?>