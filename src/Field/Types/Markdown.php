<?php namespace Frozennode\Administrator\Field\Types;

class Markdown extends Text {

	/**
	 * Abstract method that should return a field's string representation in the config files
	 *
	 * @return string
	 */
	public function getConfigName()
	{
		return 'markdown';
	}
}