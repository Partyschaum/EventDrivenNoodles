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
$pastaPan = new Pan($eventLoop);
$saucePan = new Pan($eventLoop);
$water = new Water();
$plate = new Plate();

$pastaPan->fill($water);
echo "pastaPan: Starting to boil water\n";
$pastaPan->warm(10, function() use ($pastaPan, $plate, $water) {
    echo "pastaPan: Water is boiling\n";
    $pastaPan->fill(new Spaghetti());
    echo "pastaPan: Starting to boil spaghetti\n";
    $pastaPan->warm(8, function() use ($pastaPan, $plate, $water) {
        echo "pastaPan: Spaghetti is ready\n";
        $pastaPan->remove($water);
        $plate->addContentsOf($pastaPan);
    });
});

$eventLoop->executeLater(7, function() use ($plate, $eventLoop) {
    $saucePan = new Pan($eventLoop);
    $saucePan->fill(new OliveOil());
    echo "saucePan: Starting to warm olive oil\n";
    $saucePan->warm(2, function() use ($saucePan, $plate) {
        echo "saucePan: Olive oil is warm\n";
        $saucePan->fill(new Mirepoix());
        echo "saucePan: Starting to cook the Mirepoix\n";
        $saucePan->warm(5, function() use ($saucePan, $plate) {
            echo "saucePan: Mirepoix is ready to welcome tomato\n";
            $saucePan->fill(new Tomato());
            echo "saucePan: Starting to cook tomato\n";
            $saucePan->warm(4, function() use ($saucePan, $plate) {
                echo "saucePan: Tomato sauce is ready\n";
                $plate->addContentsOf($saucePan);
            });
        });
    });
});

$eventLoop->start();

$plate->serve('Voilà');