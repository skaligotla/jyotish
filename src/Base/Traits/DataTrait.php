<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Base\Traits;

use Jyotish\Varga\Varga;

/**
 * DataTrait provides a data operations.
 * 
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
trait DataTrait
{
    /**
     * Instance of Data.
     * 
     * @var \Jyotish\Base\Data
     */
    protected $Data = null;
    
    /**
     * Temporary data.
     * 
     * @var array;
     */
    protected $temp = [];

    /**
     * Set Data.
     * 
     * @param \Jyotish\Base\Data $Data
     * @return mixed
     */
    public function setData(\Jyotish\Base\Data $Data)
    {
        $this->Data = $Data;
        
        return $this;
    }

    /**
     * Get data.
     * 
     * @param null|array $blocks Array of blocks (optional)
     * @param string $vargaKey Varga key (optional)
     * @return array
     */
    public function getData(array $blocks = null, $vargaKey = Varga::KEY_D1)
    {
        return $this->Data->getData($blocks, $vargaKey);
    }
    
    /**
     * Check data.
     * 
     * @param null|string $function Function name
     * @return void
     */
    private function checkData($function = null)
    {
        if (!isset($this->getData()['graha'])) {
            $this->Data->calcParams();
        }
    }
}
