<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token_Access;

class Ihealth extends Provider
{
	public $name = 'ihealth';

	// public $uid_key = 'uid';

	public $scope = array('OpenApiBP', 'OpenApiWeight');

	public $scope_seperator = ' ';

	protected $params_map = array(
		'scope' => 'APIName'
	);

	public function url_authorize()
	{
		return 'https://api.ihealthlabs.com:8443/api/OAuthv2/userauthorization.ashx';
	}

	public function url_access_token()
	{
		return 'https://api.ihealthlabs.com:8443/api/OAuthv2/userauthorization.ashx';
	}
}
