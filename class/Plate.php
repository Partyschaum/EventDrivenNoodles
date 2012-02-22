<?php
/**
 * Plate.php
 *
 * User: hauke
 * Date: 22.02.12 21:47
 */
class Plate
{
    private $_contents = array();

    public function addContentsOf($content)
    {
        $this->_contents[] = $content;
    }

    public function serve($message)
    {
        echo $message . "\n";
    }
}
