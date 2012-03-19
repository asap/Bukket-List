<h1>Add List</h1>
<?php
	echo $this->Form->create('BukketList');
	echo $this->Form->input('title', array( 'class' => 'fatwide title_prompt' ) );
	echo $this->Form->input('items', array('class' => 'fatwide' ));
	echo $this->Form->end(array( 'label' => 'Save Bukket List', 'class' => 'fatwide orange' ) );
?> 