<?php
/**
 * Pan.php
 *
 * User: hauke
 * Date: 22.02.12 21:40
 */
class Pan implements ServiceProvider
{
    /** @var EventLoop */
    private $_eventLoop = null;

    /** @var array */
    private $_ingredients = array();

    /**
     * @param EventLoop $eventLoop
     */
    public function __construct(EventLoop $eventLoop)
    {
        $this->_eventLoop = $eventLoop;
    }

    /**
     * Add an ingredient to the pan.
     *
     * @param Ingredient $ingredient
     */
    public function fill(Ingredient $ingredient)
    {
        $this->_ingredients[spl_object_hash($ingredient)] = $ingredient;
    }

    /**
     * Remove an ingredient from the pan.
     *
     * @param Ingredient $ingredient
     */
    public function remove(Ingredient $ingredient)
    {
        $hash = spl_object_hash($ingredient);
        if (isset($this->_ingredients[$hash])) {
            unset($this->_ingredients[$hash]);
        }
    }

    /**
     * "Warm" / set a callback at a given time (tick) in future.
     *
     * @param int $duration
     * @param callback $callback
     */
    public function warm($duration, $callback)
    {
        $this->_eventLoop->executeLater($duration, $callback);
    }
}
