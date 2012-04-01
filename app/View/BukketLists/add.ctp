<h1>Add List</h1>
<?php
	echo $this->Form->create('BukketList');
	echo $this->Form->input('title', array( 'class' => 'fatwide title_prompt' ) );

	// @TODO: Make this dynamic by adding a button which would clone this input
	for($i = 0; $i < 7; $i++) {
		echo $this->Form->input(
			"BukketListItem.$i.value",
			array(
				'type' => 'text',
				'class' => 'fatwide',
				'label' => 'Value ' . ($i + 1)
			)
		);
	}

	echo $this->Form->end(array( 'label' => 'Save Bukket List', 'class' => 'fatwide orange'));
?> 