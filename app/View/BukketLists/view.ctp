<article>
	<header>
		<h1><?php echo $bukket_lists['BukketList']['title']?></h1>
	</header>
	<section>
		<?php foreach ($bukket_lists['BukketListItem'] as $bukketListItem): ?>
			<pre><?php echo $bukketListItem['value'] ?></pre>
		<?php endforeach; ?>
	</section>

	<footer>
		<p>Created on <?php echo $bukket_lists['BukketList']['created']?> by You</p>
		<p>Modified on <?php echo $bukket_lists['BukketList']['modified']?> by You</p>
		<p>Shared on Twitter, Facebook, and Google+</p>
	</footer>
</article>


<aside style="display:none;">
	<h3>Task Complete!</h3>
	<p>Looking good Chief! Another thing off your list</p>
</aside>