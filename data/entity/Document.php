<?php

namespace app\data\entity;


class Document extends \lithium\data\entity\Document {

	public function __set($name, $value=null) {
		$model = $this->_model;
		$schema = $model::schema();

		if (isset($schema[$name]['protected']) &&
				$schema[$name]['protected'] &&
				$this->getCaller() != $model) {
			// do something else ....
		} else {
			parent::__set($name, $value);
		}
	}

	protected function getCaller() {
		$bk = debug_backtrace();
		return $bk[2]['class'];
	}

}
