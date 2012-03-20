<?php
class BukketList extends AppModel{
	public $name = 'BukketList';	
	public $validate = array(
      'title' => array(
      		'this_field_can_not_be_empty' => array(
	        	'rule' => 'notEmpty',
	        	'message' => 'Hey buddy, you forgot to fill this in.'
          		)
          	'must_be_unique' => array(
          		'rule' => 'isUnique',
          		'message' => 'You already have this in your bukket list.',
          		)
      ),
      'items' => array(
      		'this_field_can_not_be_empty' => array(
      			'rule' => 'notEmpty',
      			'message' => 'Um... you forgot to fill this one too.'
            )
        )
  );
}