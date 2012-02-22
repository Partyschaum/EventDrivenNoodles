<?php
/**
 * EventLoop.php
 *
 * User: hauke
 * Date: 22.02.12 22:25
 */
class EventLoop
{
    /** @var int */
    private $_tick = 0;

    /** @var array */
    protected $_callbacksForTick = array();

    /**
     * Start the asynchronous processing of callbacks.
     */
    public function start()
    {
        while ($this->_callbacksForTick) {
            $this->_tick++;
            $this->executeCallbacks();
        }
    }

    /**
     * Execute the callbacks at the actual tick.
     *
     * @return mixed
     */
    public function executeCallbacks()
    {
        echo "Tick is " . $this->_tick . "\n";
        if (!isset($this->_callbacksForTick[$this->_tick])) {
            return;
        }
        foreach ($this->_callbacksForTick[$this->_tick] as $callback) {
            call_user_func($callback, $this);
        }
    }

    /**
     * Set a callback for execution at delayed moment.
     *
     * @param $delay
     * @param $callback
     */
    public function executeLater($delay, $callback)
    {
        $this->_callbacksForTick[$this->_tick + $delay][] = $callback;
    }
}
