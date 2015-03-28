<div class="span10">
	<article>
		<h1><?=$topic->title?></h1>
		<div>
			<div>
				<?=date('l dS \o\f F o, h:i:s A ',$topic->created)?>
				<!--<?=kdate($topic->created)?>-->
			</div>
			<?=auto_link($topic->description)?>
		</div>
	</article>
	<div>
		<a href="/CodeIgniter_2.2.0/index.php/topic/add" class="btn">Add</a>
	</div>
</div>