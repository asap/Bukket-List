<h1>Add List</h1>
<?php
	echo $this->Form->create('BukketList');
	echo $this->Form->input('title');
	echo $this->Form->input('items', array('rows' => '7'));
	echo $this->Form->end('Save Bukket List');
?> 