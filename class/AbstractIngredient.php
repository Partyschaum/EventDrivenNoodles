<?php
/**
 * AbstractIngredient.php
 *
 * User: hauke
 * Date: 22.02.12 22:13
 */
class AbstractIngredient implements Ingredient
{
    /** @var string */
    private $_name;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return $this->getName();
    }

}
