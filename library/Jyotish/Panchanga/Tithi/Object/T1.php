<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Tithi\Object;

use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Panchanga\Karana\Karana;

/**
 * Class of tithi 1.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class T1 extends \Jyotish\Panchanga\Tithi\Tithi {
	/**
	 * Devanagari number 1 in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	static public $tithiTranslit = array(
		 'd1'
	);
	
	static public $tithiDeva = Deva::DEVA_VISHNU_YAJNESHVARA;
	static public $tithiPaksha = self::PAKSHA_SHUKLA;
	static public $tithiType = self::TYPE_NANDA;
	static public $tithiKarana = array(
		1 => Karana::NAME_KINSTUGNA,
		2 => Karana::NAME_BAVA
	);

	public function __construct($options) {
		return $this;
	}

}