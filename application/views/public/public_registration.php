<?php include('public_header.php') ?>
	<div class="container" style="margin-top: 30px;">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('registration/user_registration'); ?>
                    <legend>Blog Registration</legend>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php echo form_input(['name'=>'firstname', 'placeholder'=>'Enter your Firstname','class'=>'form-control','value'=>set_value('firstname')]); ?>
                        <?php echo form_error('firstname'); ?>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php echo form_input(['name'=>'lastname', 'placeholder'=>'Enter your lastname','class'=>'form-control','value'=>set_value('lastname')]); ?>
                        <?php echo form_error('lastname'); ?>
                    </div>

                    <div class="form-group">
                        <hr/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <?php echo form_input(['name'=>'username', 'placeholder'=>'Enter your username','class'=>'form-control','value'=>set_value('username')]); ?>
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?php echo form_password(['name'=>'password', 'placeholder'=>'Enter your password','class'=>'form-control','value'=>set_value('password')]); ?>
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <hr/>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit(['name'=>'submit', 'value'=>'Save','class'=>'btn btn-primary btn-block']); ?>
                        
                    </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php include('public_footer.php') ?>