<?php include ('admin_header.php') ?>
<div class="container">
	<?php echo form_open('admin/article/add'); ?>
		<div class="col-sm-7">
			<div class="form-group">
				<label for="title">Title</label>
				<?php echo form_textarea(['name'=>'article_title','rows'=>'1','id'=>'title','class'=>'form-control','value'=>set_value('article_title')]); ?>
				<?php echo form_error('article_title') ?>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<?php echo form_textarea(['name'=>'article_body','rows'=>'5','id'=>'description','class'=>'form-control','value'=>set_value('article_body')]); ?>
				<?php echo form_error('article_body'); ?>
			</div>
			<div class="form-group col-sm-6">
				<div class="col-sm-4">
				  <input type="button" id="clear" value="Clear" onclick="clean();" class="btn btn-primary">
				</div> 
				<div class="col-sm-3">
					<?php echo form_submit(['name'=>'submit', 'value'=>'save','class'=>'btn btn-primary']); ?>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>
</div>


<script>
	function clean() {
    	document.getElementById("title").value = "";
    	document.getElementById("description").value = "";
	}
</script>
<?php include ('admin_footer.php') ?>