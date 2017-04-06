<?php

namespace App\Helpers;

/**
 * Get third-party content helper
 */
class Http {

	const HTTP200 = 'HTTP/1.1 200 OK';

	/**
	 * Get contents from http
	 * @param  str, str|array
	 * @return mixed
	 */
	public static function get($host, $params = '') {

		$response = self::check($host);

		if ($response['success']) {
			$response = file_get_contents($host . (new static())->buildParams($params));
			if ($response) {
				$result = [
					'success'  => true,
					'message'  => 'Success',
					'response' => $response,
				];
			} else {
				$result = [
					'success'  => false,
					'message'  => 'No response from URL: ' . $host . (new static())->buildParams($params),
				];
			}
		} else {
			$result = [
				'success'  => false,
				'message'  => $response['message'],
				'response' => $response['response'],
			];
		}

		return $result;
	}

	/**
	 * Check host accessibility
	 * @param  str
	 * @return array
	 */
	public static function check($host) {

		$response = get_headers($host);

		if ($response[0] == self::HTTP200) {
			$result = [
				'success'  => true,
				'message'  => 'Success', 
				'response' => $response[0],
			];
		} else {
			$result = [
				'success'  => false,
				'message'  => 'Host ' . $host . ' not accessible.', 
				'response' => $response[0],
			];
		}
		//Add logging maybe

		return $result;
	}

	/**
	 * Build http query from params
	 * @param  str|array
	 * @return str
	 */
	protected function buildParams($params = '')
	{
		$result = '';

		if (is_string($params)) {
			$result = $params;
		}

		if (is_array($params)) {
			$result = '?' . http_build_query($params);
		}

		return $result;
	}

}