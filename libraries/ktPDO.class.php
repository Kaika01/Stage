<?php

/************
 *	Library : ktPDO
 * 	Description : Interface d'accès PDO via singleton
 *	Date : 18.04.2011
 *	Author : Marceau CASALS (http://www.akibatech.fr/) 
 ************/

class ktPDO
{
	private $PDO = null;
	
	private static $instance = null;
	private static $sql_type = 'mysql';
	private static $sql_host = 'localhost';
	private static $sql_base = 'default';
	private static $sql_user = 'root';
	private static $sql_password = '';
	
	private function __construct()
	{
		$this->PDO = new PDO(self::$sql_type . ':host=' . self::$sql_host . ';dbname=' . self::$sql_base, self::$sql_user, self::$sql_password);
	}

	private function __clone() {}
	
	public static function get()
	{
		if (is_null(self::$instance))
		{
			self::$instance = new self;
		}
			
		return self::$instance;
	}
	
	public static function set_type($type = '')
	{
		self::$sql_type = $type;
	}
	
	public static function set_host($host = '')
	{
		self::$sql_host = $host;
	}
	
	public static function set_base($base = '')
	{
		self::$sql_base = $base;
	}

	public static function set_user($user = '')
	{
		self::$sql_user = $user;
	}
	
	public static function set_password($password = '')
	{
		self::$sql_password = $password;
	}
	
	public function __call($method, $args)
	{
		return call_user_func_array(array($this->PDO, $method), $args);
	}
}