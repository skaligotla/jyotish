<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\Object;

use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 10.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T10 extends \Jyotish\Panchanga\Tithi\Tithi {
	/**
	 * Devanagari number 10 in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	static public $tithiTranslit = array(
		 'd1', 'd0'
	);
	
	static public $tithiDeva = Deva::DEVA_IRAVATA;
	static public $tithiType = self::TYPE_PURNA;
	static public $tithiPaksha = self::PAKSHA_SHUKLA;
	static public $tithiKarana = array(
		1 => Karana::NAME_TAITILA,
		2 => Karana::NAME_GARA
	);

	public function __construct($options) {
		return $this;
	}

}