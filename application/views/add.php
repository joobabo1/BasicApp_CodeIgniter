<?php echo validation_errors(); ?>

<form class="span10" action="/CodeIgniter_2.2.0/index.php/topic/add" method="post">
	<input class="span12" type="text" name="title" placeholder="Subject">
	<textarea class="span12" name="description" placeholder='Message' rows="15"></textarea>

	<input type="submit" class="btn">
</form>