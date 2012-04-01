<h1>Edit List</h1>
<?php
    echo $this->Form->create('BukketList', array('action' => 'edit'));
    echo $this->Form->input('BukketList.id', array('type' => 'hidden'));
    echo $this->Form->input('BukketList.title', array( 'class' => 'fatwide' ) );
    foreach ($this->request->data['BukketListItem'] as $i => $BukketListItem) {
    	echo $this->Form->input('BukketListItem.$i.id', array('type' => 'hidden', 'value' => $BukketListItem['id']));
    	echo $this->Form->input('BukketListItem.$i.value', array('type' => 'text', 'class' => 'fatwide', 'value' => $BukketListItem['value']));
	}
    echo $this->Form->end(array( 'label' => 'Save Bukket List', 'class' => 'fatwide orange' ) );