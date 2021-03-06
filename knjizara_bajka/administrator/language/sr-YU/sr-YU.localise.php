<?php
/**
 * @version             $Id: sr-YU.localise.php 15628 2010-03-27 05:20:29Z infograf768 $
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license             GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die; 
 
/**
 * sr-YU localise class
 *
 * @package             Joomla.admin
 * @since               1.6
 */
abstract class sr_YULocalise {
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param	integer $count  The number of items.
	 * @return	array  An array of potential suffixes.
	 * @since	1.6
	 */
	public static function getPluralSuffixes($count) {
		if ($count == 0) {
			$return =  array('0');
		}
		elseif($count == 1) {
			$return =  array('1');
		}
		elseif($count < 5) {
			$return =  array('234');
		}
		else {
			$return = array('MORE');
		}
		return $return;
	}
        /**
         * Returns the ignored search words
         *
         * @return      array  An array of ignored search words.
         * @since       1.6
         */
	public static function getIgnoredSearchWords()
	{
		return array('i', 'u', 'na', 'sa');
	}
        /**
         * Returns the lower length limit of search words
         *
         * @return      integer  The lower length limit of search words.
         * @since       1.6
         */
        public static function getLowerLimitSearchWord() {
                return 3;
        }
        /**
         * Returns the upper length limit of search words
         *
         * @return      integer  The upper length limit of search words.
         * @since       1.6
         */
        public static function getUpperLimitSearchWord() {
                return 20;
        }
        /**
         * Returns the number of chars to display when searching
         *
         * @return      integer  The number of chars to display when searching.
         * @since       1.6
         */
        public static function getSearchDisplayedCharactersNumber() {
                return 200;
        }
        
		/**
		 * This method processes a string and replaces all accented UTF-8 characters by unaccented
		 * ASCII-7 "equivalents"
		 *
		 * @param	string	$string	The string to transliterate
		 * @return	string	The transliteration of the string
		 * @since	1.6
		 */
		public static function transliterate($string)
		{
		$str = JString::strtolower($string);

		//Specific language transliteration.
		//This one is for latin 1, latin supplement , extended A, Cyrillic, Greek

		$glyph_array = array(
		'a'		=>	'??,??,??,??,??,??,??,??,??,???,??,??',
		'ae'	=>	'??',
		'b'		=>	'??,??',
		'c'		=>	'??,??,??,??,??,??,??,??',
		'dj'	=>	'??,??,??,??,??,??,??',
		'dz'	=>	'd??',
		'e'		=>	'??,??,??,??,??,??,??,??,??,??,??,??',
		'f'		=>	'??,??',
		'g'		=>	'??,??,??,??,??,??,??',
		'h'		=>	'??,??,??,??',
		'i'		=>	'??,??,??,??,??,??,??,??,??,??,??,??,??,??,??,??',
		'ij'	=>	'??',
		'j'		=>	'??',
		'ja'	=>	'??',
		'ju'	=>	'????',
		'k'		=>	'??,??,??',
		'l'		=>	'??,??,??,??,??,??,??',
		'lj'	=>	'??',
		'm'		=>	'??',
		'n'		=>	'??,??,??,??,??,??,??',
		'nj'	=>	'??',
		'o'		=>	'??,??,??,??,??,??,??,??,??,??,??,??',
		'oe'	=>	'??,??',
		'p'		=>	'??,??',
		'ph'	=>	'??',
		'ps'	=>	'??',
		'r'		=>	'??,??,??,??,??,??,??',
		's'		=>	'??,??,??,??,??,??',
		'ss'	=>	'??,??',
		'shch'	=>	'??',
		't'		=>	'??,??,??,??',
		'th'	=>	'??',
		'u'		=>	'??,??,??,??,??,??,??,??,??,??,??',
		'v'		=>	'??',
		'w'		=>	'??',
		'x'		=>	'??,??',
		'y'		=>	'??,??,??,??',
		'z'		=>	'??,??,??,??,??,??,??'
		);
		
		foreach( $glyph_array as $letter => $glyphs ) {
			$glyphs = explode( ',', $glyphs );
			$str = str_replace( $glyphs, $letter, $str );
		}

		return $str;
		}
}
