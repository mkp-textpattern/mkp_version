	if (class_exists('Textpattern_Tag_Registry')) {
	Txp::get('Textpattern_Tag_Registry')
		->register('mkp_version')
		->register('mkp_if_version')
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

