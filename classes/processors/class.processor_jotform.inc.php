<?php

/**
 * Replication of JotForm Form Embed
 * Original Plugin: https://wordpress.org/plugins/embed-form/
 *
 * Make your forms at: https://www.jotform.com/
 *
 * Usage Example: [third source="jotform" id="00000000000000" section=""]
 */
class processor_jotform extends hosted_content_interface
{
	protected $as_is = true;
	protected $development_completed = true;

	public function fetch($form_id = null, $section = null, $others=array())
	{
		$jotform = sprintf('<script src="//www.jotform.com/jsform/%s" type="text/javascript"></script>', esc_attr($form_id));

		return $jotform;
	}
}
