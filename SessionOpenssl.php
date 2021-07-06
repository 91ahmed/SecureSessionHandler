<?php
	
	namespace Sessions;

	/**
	 *	Session encryption
	 *
	 *	@author   Ahmed Hassan <91ahmed.github.io>
	 *	@link     https://github.com/91ahmed
	 */
	class SessionOpenssl
	{
		/**
		 *	@var string $openssl_key
		 */
		private static $openssl_key    = 'bRuD5WYw5wd0rdHR9yLlM6XX2vteuUniQBqE70nAuhU9';

		/**
		 *	@var string $openssl_method
		 */
		private static $openssl_method = 'AES-256-CBC';

		/**
		 *	@var string $openssl_iv
		 */
		private static $openssl_iv     = '413149ee4xcfcda5';

		/**
		 *	Encrypt data
		 *
		 *	@param string $value
		 * 	@return string
		 */
		public static function encrypt ($value)
		{
			return openssl_encrypt($value, self::$openssl_method, self::$openssl_key, OPENSSL_RAW_DATA, self::$openssl_iv);
		}

		/**
		 *	Decrypt data
		 *
		 *	@param string $value
		 * 	@return string
		 */
		public static function decrypt ($value)
		{
			return openssl_decrypt($value, self::$openssl_method, self::$openssl_key, OPENSSL_RAW_DATA, self::$openssl_iv);
		}
	}
?>