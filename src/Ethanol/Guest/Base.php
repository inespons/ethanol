<?php

namespace Ethanol;

abstract class Guest_Base
{
	protected $_data = [];

	public function __get($name)
	{
		return ( ! array_key_exists($name, $this->_data)) ? null : $this->_data[$name];
	}

	public function __set($name, $value)
	{
		$this->_data[$name] = $value;
	}
}

