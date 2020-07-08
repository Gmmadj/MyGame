<?php 

function fastFill(array $val) 
{
	foreach ($val as $key) {
		$this->$key = $key;
	}
}