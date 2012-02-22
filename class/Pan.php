<?php
/**
 * Pan.php
 *
 * User: hauke
 * Date: 22.02.12 21:40
 */
class Pan
{
    private $_ingredients = array();

    public function fill($ingredient)
    {
        $this->_ingredients[spl_object_hash($ingredient)] = $ingredient;
    }

    public function warm($duration)
    {

    }

    public function remove($ingredient)
    {
        $hash = spl_object_hash($ingredient);
        if (isset($this->_ingredients[$hash])) {
            unset($this->_ingredients[$hash]);
        }
    }
}
