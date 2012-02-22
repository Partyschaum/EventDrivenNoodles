<?php
/**
 * run.php
 *
 * User: hauke
 * Date: 22.02.12 21:48
 */

include 'class/Autoloader.php';

Autoloader::register();

$eventLoop = new EventLoop();

$pan = new Pan($eventLoop);

echo "Starting to warm\n";

$pan->warm(10, function() {
    echo "Now it's cooked\n";
});

$eventLoop->start();