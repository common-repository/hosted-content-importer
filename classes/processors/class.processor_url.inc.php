<?php

/**
 * Implementation left for developers
 * Cases: API based content pulling where server may require login/access.
 */
class processor_url extends hosted_content_interface
{
	protected $as_is = false;
	protected $development_completed = false;

	/**
	 * @todo Import content from a URL (remote file)
	 *
	 * @param null $content_id
	 * @param null $section_id
	 * @param array $others
	 *
	 * @return string
	 */
	public function fetch($content_id = null, $section_id = null, $others=array())
	{
		$parameters = array('id' => $content_id, 'section' => $section_id,);
		/**
		 * @todo Remove hard coded custom URLs
		 */
		$api_url = constant('HCI_CUSTOM_API_URL') . '?' . http_build_query($parameters);
		$json = $this->fetch_url($api_url);
		$data = json_decode($json, true);
		$html_table = $this->html_table($data);

		return $html_table;
	}

}
