<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token_Access;

/*
 * Uber API credentials: https://developer.uber.com/apps/
 * Uber API docs: https://developer.uber.com/
 */


/**
 * Uber OAuth Provider
 *
 * @package    laravel-oauth2
 * @category   Provider
 * @author     Andreas Creten
 */

class Uber extends Provider {
	/**
	* @var  string  provider name
	*/
	public $name = 'uber';

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
		return 'https://login.uber.com/oauth/authorize';
	}

	/**
	* Returns the access token endpoint for the provider.
	*
	* @return  string
	*/
	public function url_access_token()
	{
		return 'https://login.uber.com/oauth/token';
	}
}
