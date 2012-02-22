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
$water = new Water();

$pastaPan->fill($water);

$pastaPan->fill(new Spaghetti());

$pastaPan->remove($water);

$saucePan = new Pan($eventLoop);
$saucePan->fill(new OliveOil());

$saucePan->fill(new Mirepoix());

$saucePan->fill(new Tomato());

$plate = new Plate();
$plate->addContentsOf($pastaPan);
$plate->addContentsOf($saucePan);
$plate->serve('Voilá');