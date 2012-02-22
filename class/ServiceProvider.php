<?php
/**
 * ServiceProvider.php
 *
 * User: hauke
 * Date: 22.02.12 22:38
 */
interface ServiceProvider
{
    public function __construct(EventLoop $eventLoop);
}
