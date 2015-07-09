
	function mkp_version()
	{
		extract(get_prefs());

		return $version;
	}
	
	function mkp_if_version($atts)
	{
		extract(lAtts(array(
			'version'   => '',
		),$atts));

		$currentversion = $version;
		
		extract(get_prefs());

		if (strstr($version, $currentversion)) {
			return TRUE;
		} else {
			return FALSE;
		}

	}

