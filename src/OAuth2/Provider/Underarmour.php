<?php

namespace OAuth2\Provider;

use OAuth2\Provider;
use OAuth2\Token_Access;

/*
 * Under Armour API credentials: https://developer.underarmour.com/apps/mykeys
 * Under Armour API docs: https://developer.underarmour.com/docs/v70_OAuth_2_Intro
 */


/**
 * Under Armour OAuth Provider
 *
 * @package    laravel-oauth2
 * @category   Provider
 * @author     Andreas Creten
 */

class Underarmour extends Provider {
	/**
	 * @var  string  provider name
	 */
	public $name = 'underarmour';

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

		return 'https://www.mapmyfitness.com/v7.0/oauth2/uacf/authorize/';
	}

	/**
	 * Returns the access token endpoint for the provider.
	 *
	 * @return  string
	 */
	public function url_access_token()
	{
		return 'https://api.ua.com/v7.0/oauth2/uacf/access_token/';
	}

	/*
	* Get access to the API
	*
	* @param	string	The access code
	* @return	object	Success or failure along with the response details
	*/
	public function access($code, $options = array())
	{
		// Add Api-Key header
		$options['header'] = 'Api-Key: ' .  $this->client_id;

		return parent::access($code, $options);
	}
}