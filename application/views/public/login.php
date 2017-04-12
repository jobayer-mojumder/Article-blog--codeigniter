<?php include('public_header.php'); ?>
<div class="container" style="margin-top: 30px;">
    <div class="col-sm-5 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('login/success'); ?>
                    <legend>Blog Login</legend>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <?php echo form_input(['name'=>'username','placeholder'=>'Enter your username','class'=>'form-control','value'=>set_value('username')]) ?>
                        <?php echo form_error('username'); ?>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                        <?php echo form_password([ 'name'=>'password','placeholder'=>'Enter your password','class'=>'form-control']) ?>
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <hr/>
                    </div>
                    <div class="form-group">
                        <?php echo form_submit([ 'name'=>'submit','value'=>'Login','class'=>'btn btn-primary btn-block']) ?>
                        
                    </div>

                    <div class="form-group">
                        <hr/>
                        <div class="col-sm-6" style="padding: 0;">New user? <a href="<?php echo base_url('newuser'); ?>">Sign Up here</a></div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php include('public_footer.php') ?>