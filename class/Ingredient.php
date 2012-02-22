<?php
/**
 * Ingredient.php
 *
 * User: hauke
 * Date: 22.02.12 22:11
 */
interface Ingredient
{
    /**
     * @abstract
     * @param string $name
     */
    public function setName($name);

    /**
     * @abstract
     * @return string
     */
    public function getName();

    /**
     * @abstract
     * @return string
     */
    public function __toString();
}
