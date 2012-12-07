<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Useradmin_Model_User {



	public function remove_all($type)
	{
		$relation_entities=$this->$type->find_all();
		foreach ($relation_entities as $entity) {
			$this->remove($type,$entity);
		}
	}



}