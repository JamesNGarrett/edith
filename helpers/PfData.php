<?php

Class PfData
{
	// ================================== String Transform ====
	public static function toSnake($str)
	{
		return preg_replace('/[^a-z0-9]+/','_',strtolower(trim($str)));
	}

	public static function toKebab($str)
	{
		return str_replace('_','-',self::toSnake($str));
	}

	public static function toCamel($str)
	{
		return str_replace('_', '', ucwords(self::toSnake($str), '_'));
	}

	public static function toPascal($str)
	{
		return ucfirst(self::underscoresToCamelCase($str));
	}

	public static function toTitle($str)
	{
		return str_replace('_', ' ', ucfirst(ucwords(self::toSnake($str), '_')));
	}

	// ===================================== String Filters ====

	public static function filterAlphaNumericAndHyphen($str)
	{
		return preg_replace("/[^a-zA-Z0-9-]+/", "", $str); 
	}

	public static function filterAlphaNumericAndUnderscores($str)
	{
		return preg_replace("/[^a-zA-Z0-9_]+/", "", $str); 
	}

	public static function filterText($string)
	{
		$string = str_replace("\r\n", '|l|b|', trim($string));
		$string = filter_var(trim($string), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK);
		return str_replace('|l|b|', "\r\n", $string);
	}

	public static function encodeText($string)
	{
		$string = str_replace("\r\n", '|l|b|', trim($string));
		$string = filter_var(trim($string), FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW  | FILTER_FLAG_ENCODE_HIGH  | FILTER_FLAG_ENCODE_AMP );
		return str_replace('|l|b|', "\r\n", $string);
	}

	public static function filterCommaSeparatedNumbers($str){
		return preg_replace("/[^0-9,]/", "", $str);
	}

	// ===================================== String Modifiers

	public static function extractFirstBetween($str,$start,$end)
	{
		$start_pos = strpos($str, $start);
		if($start_pos === false){return false;}
		$start_pos += strlen($start);
		$end_pos = strpos($str, $end, $start_pos);
		if($end_pos === false){return false;}
		return substr($str, $start_pos,$end_pos - $start_pos);
	}

	// ===================================== Int Filters ====


}