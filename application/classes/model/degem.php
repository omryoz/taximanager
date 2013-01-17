<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Degem extends ORM {

//	protected $_has_one = array();
//
//	/**
//	 * "Belongs to" relationships
//	 * @var array
//	 */
	protected $_belongs_to = array(
		'brand'	=>array(),
	);

	/**
	 * "Has many" relationships
	 * @var array
	 */
//	protected $_has_many = array(
//
//	);


	/**
	 * Validation object created before saving/updating
	 * @var Validation
	 */
	function __construct($id = null) {
		parent::__construct($id);
		//$this->_table_name=$_SESSION['userid'].'_'.$this->_object_name;
		//$this->_table_name=Auth::instance()->get_user()->id.'_'.$this->_object_name;

	}


	public function remove_all($type)
	{
		$relation_entities=$this->$type->find_all();
		foreach ($relation_entities as $entity) {
			$this->remove($type,$entity);
		}
	}



}