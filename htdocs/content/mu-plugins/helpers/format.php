<?php

	class format {

		public static function price($number = 0)
		{
			return '$' . number_format($number, 0,',','.');
		}

		public static function title($string, $delimiter = '-')
		{
			$string = str_replace($delimiter, ' ', $string);
			$string = ucfirst(strtolower($string));
			return $string;
		}

		public static function slug($string, $delimiter = '-')
		{
			$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
			$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
			$clean = strtolower(trim($clean, '-'));
			$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
			return $clean;
		}

	}