<?php
/**
 * run.php
 *
 * User: hauke
 * Date: 22.02.12 21:48
 */

include 'class/Autoloader.php';

Autoloader::register();

$pastaPan = new Pan();
$water = new Water();

$pastaPan->fill($water);
$pastaPan->warm(10);

$pastaPan->fill(new Spaghetti());
$pastaPan->warm(8);

$pastaPan->remove($water);

$saucePan = new Pan();
$saucePan->fill(new OliveOil());
$saucePan->warm(2);

$saucePan->fill(new Mirepoix());
$saucePan->warm(5);

$saucePan->fill(new Tomato());
$saucePan->warm(4);

$plate = new Plate();
$plate->addContentsOf($pastaPan);
$plate->addContentsOf($saucePan);
$plate->serve('Voilá');