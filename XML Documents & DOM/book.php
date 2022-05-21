<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<bookinfo></bookinfo>");

$item1 = $sxe->addChild('book');
$item1->addChild('bookno', '1');
$item1->addChild('bookName', 'Java');
$item1->addChild('authorname', 'Balgru Swami');
$item1->addChild('price', 250);
$item1->addChild('year', 2006);

$item1 = $sxe->addChild('book');
$item1->addChild('bookno', '2');
$item1->addChild('bookName', 'C');
$item1->addChild('authorname', 'Denis Ritchie');
$item1->addChild('price', 500);
$item1->addChild('year', 1971);
$sxe->asXML('book.xml');

?>

