<?php
class BukketList extends AppModel{
	public $name = 'BukketList';

  public $hasMany = array(
    'BukketListItem' => array(
        'className'   => 'BukketListItem',
        'foreignKey'  => 'bukket_lists_id',
        //'conditions'  => array('BukketListItem.is_archived' => 0)
        //'order'       => 'BukketListItem.order ASC'
        //'limit'       => '10',
        'dependent'   => true
      )
  );

	public $validate = array(
      'title' => array(     
            'this_field_can_not_be_empty' => array(
                'rule' => 'notEmpty',                
                'message' => 'Wait, fill this out first.'
              ),

          	'must_be_unique' => array(
          		'rule' => 'isUnique',              
          		'message' => 'You already have this in your bukket list.',
          		)
      )
  );
}