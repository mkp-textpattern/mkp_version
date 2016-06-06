// TXP 4.6 tag registration
if (class_exists('\Textpattern\Tag\Registry')) {
Txp::get('\Textpattern\Tag\Registry')
->register('mkp_url_version')
;
}

	function mkp_version()
	{
		extract(get_prefs());

		return $version;
	}
	
	function mkp_if_version($atts, $thing)
	{
		extract(lAtts(array(
			'version'   => '',
		),$atts));

		$currentversion = (!empty($version)) ? $version : '';
		
		extract(get_prefs());

		$condition = (strstr($version, $currentversion));

		$out = EvalElse($thing, $condition);

		return ($out);

	}

