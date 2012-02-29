<h1><?php echo $bukket_lists['BukketList']['title']?></h1>

<p><small>Created: <?php echo $bukket_lists['BukketList']['created']?></small></p>
<p><small>Modified: <?php echo $bukket_lists['BukketList']['modified']?></small></p>


<p><pre><?php echo $bukket_lists['BukketList']['items']?></pre></p>

<?php echo $this->Html->link('Back to Lists', array('controller' => 'bukket_lists', 'action' => 'index')); ?>