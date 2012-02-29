<h1>Edit List</h1>
<?php
    echo $this->Form->create('BukketList', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('items', array('rows' => '7'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Bukket List');
