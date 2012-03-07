<?php
class BukketList extends AppModel{
	public $name = 'BukketList';
	
	public $validate = array('title' => array('rule' => 'notEmpty'));//, 'items' => array('rule' => 'notEmpty'));
}
