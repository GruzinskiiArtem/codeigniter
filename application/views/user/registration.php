<?php echo form_open('news/create');
echo form_error('username'); ?>
<input type="text" name="username" value="<?php echo set_value('username')?>" />

<?php echo form_error('email'); ?>
<input type="email" name="email" value="<?php echo set_value('email')?>" />

<?php echo form_error('password');?>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" />

<?php echo form_error('passconf'); ?>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" />

<?php echo form_error('phone'); ?>
<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" />

</form>
