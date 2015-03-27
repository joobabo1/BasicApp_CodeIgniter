<div class="span2">
    <ul class="nav nav-tabs nav-stacked">
		<ul>
			<?php
				foreach ($topics as $entry)
				{
					$entry
				?>
			<li><a href="/CodeIgniter_2.2.0/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
			<?php
				}
			?>
		</ul>
	</ul>
</div>