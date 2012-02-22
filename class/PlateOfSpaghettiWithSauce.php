<?php
/**
 * PlateOfSpaghettiWithSauce.php
 *
 * User: hauke
 * Date: 22.02.12 23:27
 */
class PlateOfSpaghettiWithSauce extends Plate
{
    /** @var bool */
    private $_hasSpaghetti = false;

    /** @var bool */
    private $_hasSauce = false;


    /**
     * @param Pan $content
     * @see Plate::addContentsOf()
     *
     */
    public function addContentsOf(Pan $pan)
    {
        parent::addContentsOf($pan);

        if ($pan->contains('Spaghetti')) {
            $this->_hasSpaghetti = true;
        }

        if ($pan->contains('Tomato')) {
            $this->_hasSauce = true;
        }

        if ($this->_hasSpaghetti && $this->_hasSauce) {
            $this->serve('Voilà');
        }
    }
}
