<?php

namespace smergler_common\data;

class Model extends \lithium\data\Model {

	public static function findById($id) {
		$_id = is_string($id) ? new \MongoId($id) : $id;
		$conditions = compact('_id');
		return static::first(compact('conditions'));
	}

}
