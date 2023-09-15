<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Returns a boolean value based on whether the page was requested via AJAX or not
 *
 * @access	public
 * @return	boolean
 */	
if ( ! function_exists('is_ajax'))
{
	function is_ajax()
	{
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest");
	}
}

/**
 * Sets the HTTP headers for 
 *
 * @access	public
 * @param	boolean	Sets the no cache headers
 * @return	boolean
 */	
if ( ! function_exists('json_headers'))
{
	function json_headers($no_cache = TRUE)
	{
		if ($no_cache)
		{
			header('Cache-Control: no-cache, must-revalidate');
			header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		}
		header('Content-type: application/json; charset=utf-8');
	}
}

/**
  * JSON
  * 
  * @access	public
  * @param array $response
  * @return json
*/
if ( ! function_exists('JSON')) 
{
    function JSON($response = array())
    {
    	json_headers();
		exit(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }
}

/* End of file ajax_helper.php */