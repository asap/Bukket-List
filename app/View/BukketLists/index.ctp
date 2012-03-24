<?php echo $this->Html->link(
        'Create New List', 
        array('controller' => 'BukketLists', 'action' => 'add'),
        array('class' => 'orange btn' )
    ); ?>

<ul>

<?php foreach ($bukket_lists as $bukket_list): ?>
    <li>
        <span class="title"><?php echo $this->Html->link($bukket_list['BukketList']['title'],
array('controller' => 'BukketLists', 'action' => 'view', $bukket_list['BukketList']['id'])); ?></span>
        <span class="modified"><?php echo $bukket_list['BukketList']['modified']; ?></span>
        <span class="controls">
            <span class="edit btn"><?php echo $this->Html->link('Edit', array('controller' => 'BukketLists', 'action' => 'edit', $bukket_list['BukketList']['id'] )); ?></span>
            <span class="delete btn"><?php echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $bukket_list['BukketList']['id']),
                        array('confirm' => 'Are you sure?'));
                    ?></span>
        </span>
    </li>

<?php endforeach; ?>
</ul>
