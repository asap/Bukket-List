<h1>Edit List</h1>
<?php
    echo $this->Form->create('BukketList', array('action' => 'edit'));
    echo $this->Form->input('title', array( 'class' => 'fatwide' ) );
    echo $this->Form->input('items', array('rows' => '7', 'class' => 'fatwide' ));
    echo $this->Form->end(array( 'label' => 'Save Bukket List', 'class' => 'fatwide orange' ) );