<?php include ('admin_header.php') ?>
	<h4>My article </h4>
	<div class="col-sm-6">
		<div class="list-group">
		  
		<?php foreach ($articles as $article) {?>
		<div class="list-group" style="overflow: hidden; " >
			<a href="#demo<?php echo $article->id; ?>" class="list-group-item list-group-item-action" >
			    <h5 class="list-group-item-heading" id="_title<?php echo $article->id; ?>"><?php echo $article->title; ?></h5>

			  	<input href="#_des<?php echo $article->id; ?>" type="button" name="view" value="view" data-toggle="collapse">
			    <input type="button" id="<?php echo $article->id; ?>" onclick="edit(this);" value="edit">
			  	
			  	<p id="_des<?php echo $article->id; ?>" class="collapse"><?php echo $article->body; ?></p>
			</a>
		</div>
		
		<?php } ?>
		</div>
	</div>
	<?php echo form_open('admin/article_update'); ?>
	<?php echo form_input(array('name' => 'article_id', 'type'=>'hidden', 'id' =>'article_id')); ?>
		<div class="col-sm-5">
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
				<div class="col-sm-6">
				  <input type="button" id="clear" value="Clear" onclick="clean();" class="btn btn-primary">
				</div> 
				<div class="col-sm-3">
					<?php echo form_submit(['name'=>'submit', 'value'=>'Update','class'=>'btn btn-primary']); ?>
				</div>
			</div>
		</div>
	<?php echo form_close(); ?>



<script>
	function edit(obj) {
		var id = obj.id;
		document.getElementById("article_id").value= id;
    	document.getElementById("title").value = document.getElementById("_title"+id).innerHTML;
    	document.getElementById("description").value = document.getElementById("_des"+id).innerHTML;
	}
	function clean() {
		document.getElementById("article_id").value='';
    	document.getElementById("title").value = "";
    	document.getElementById("description").value = "";
	}
</script>

<?php include ('admin_footer.php') ?>