<?php
class BukketListItem extends AppModel{
	public $name = 'BukketListItem';
	public $belongsTo = 'BukketList';
	public $validate = array(
      'value' => array(     
            'this_field_can_not_be_empty' => array(
                'rule' => 'notEmpty',                
                'message' => 'Wait, fill this out first.'
              )
      )
  );
}