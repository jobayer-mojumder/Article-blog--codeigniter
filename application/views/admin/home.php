<?php include ('admin_header.php') ?>
<div class="container">
	<h4>Article list</h4>
	<div class="container">
		<div class="col-sm-9">
		<?php foreach ($articles as $article) { ?>
			<div class="list-group">
			  <a href="#<?php echo $article->id ?>" class="list-group-item list-group-item-action" data-toggle="collapse">
			    <h5 class="list-group-item-heading"><?php echo $article->title; ?></h5>
			  	<p id="<?php echo $article->id ?>" class="collapse"><?php echo $article->body ?></p>
			  </a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php include ('admin_footer.php') ?>