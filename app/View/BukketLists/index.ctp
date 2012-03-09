<table>
	<thead>
    <tr>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
        <th>Title</th>
        <th>Modified</th>
    </tr>
	</thead>

    <!-- Here is where we loop through our $bukket_lists array, printing out list info -->

    <tbody>
    <?php foreach ($bukket_lists as $bukket_list): ?>

		<tr>
		<td><?php echo $this->Html->link('Edit', array('controller' => 'bukket_lists', 'action' => 'edit', $bukket_list['BukketList']['id'] )); ?></td>
		<td><?php echo $this->Form->postLink(
		                'Delete',
		                array('action' => 'delete', $bukket_list['BukketList']['id']),
		                array('confirm' => 'Are you sure?'));
		            ?></td>
        <td>
            <?php echo $this->Html->link($bukket_list['BukketList']['title'],
array('controller' => 'bukket_lists', 'action' => 'view', $bukket_list['BukketList']['id'])); ?>
        </td>
        <td><?php echo $bukket_list['BukketList']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>

</table>

<?php echo $this->Html->link('Create New List', array('controller' => 'bukket_lists', 'action' => 'add')); ?>
