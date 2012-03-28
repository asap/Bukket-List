<h1>Add List</h1>
<?php
	echo $this->Form->create('BukketList');
	echo $this->Form->input('title', array( 'class' => 'fatwide title_prompt' ) );

	// @TODO: Make this dynamic by adding a button which would clone this input
	for($i = 1; $i < 8; $i++) {
		echo $this->Form->input("item.$i.value", array('type' => 'text', 'class' => 'fatwide'));
	}

	echo $this->Form->end(array( 'label' => 'Save Bukket List', 'class' => 'fatwide orange'));
?> 