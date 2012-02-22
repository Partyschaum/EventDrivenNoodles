<?php
/**
 * Plate.php
 *
 * User: hauke
 * Date: 22.02.12 21:47
 */
class Plate
{
    /** @var array */
    private $_contents = array();

    /**
     * Add the pan's content to the plate.
     *
     * @param Pan $content
     */
    public function addContentsOf(Pan $content)
    {
        $this->_contents[] = $content;
    }

    /**
     * Serve the food with a nice message.
     *
     * @param $message
     */
    public function serve($message)
    {
        echo $message . "\n";
    }
}
