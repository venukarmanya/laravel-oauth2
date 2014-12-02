<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token_Access;

/*
 * Misfit API credentials: https://build.misfit.com/apps
 * Misfit API docs: https://build.misfit.com/docs
 */


/**
 * Misfit OAuth Provider
 *
 * @package    laravel-oauth2
 * @category   Provider
 * @author     Hannes Van De Vreken
 */

class Misfit extends Provider {
	/**
	 * @var  string  provider name
	 */
	public $name = 'misfit';

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
		return 'https://api.misfitwearables.com/auth/dialog/authorize';
	}

	/**
	 * Returns the access token endpoint for the provider.
	 *
	 * @return  string
	 */
	public function url_access_token()
	{
		return 'https://api.misfitwearables.com/auth/tokens/exchange';
	}
}

