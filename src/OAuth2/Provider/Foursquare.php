<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token_Access;

class Foursquare extends Provider
{
	public $name = 'foursquare';

	public $method = 'POST';

	public function url_authorize()
	{
		return 'https://foursquare.com/oauth2/authorize';
	}

	public function url_access_token()
	{
		return 'https://foursquare.com/oauth2/access_token';
	}
}
