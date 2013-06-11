<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token\Token_Access;

/*
 * Fitbit API credentials: https://dev.fitbit.com/apps
 * Fitbit API docs: https://wiki.fitbit.com/display/API/OAuth+Authentication+in+the+Fitbit+API
 */


/**
 * Fitbit OAuth Provider
 *
 * @package    laravel-oauth2
 * @category   Provider
 * @author     Andreas Creten
 */

class Fitbit extends Provider {
	/**
	* @var  string  provider name
	*/
	public $name = 'fitbit';

	/**
	 * @var  string  the method to use when requesting tokens
	 */
	protected $method = 'POST';

	/**
	 * Returns the authorization URL for the provider.
	 *
	 * @return  string
	 */
	public function url_authorize()
	{
		return 'http://www.fitbit.com/oauth/authorize';
	}

	/**
	* Returns the access token endpoint for the provider.
	*
	* @return  string
	*/
	public function url_access_token()
	{
		return 'http://api.fitbit.com/oauth/access_token';
	}
}