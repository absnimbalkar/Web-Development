<?php
$xmlstr = '<?xml version="1.0" encoding="UTF-8" ?>';
$sxe = new SimpleXMLElement("<Store></Store>");

$item1 = $sxe->addChild('Item');
$item1->addChild('ItemName', 'Bat');
$item1->addChild('ItemPrice', 40000);
$item1->addChild('Quantity', 10);

$item2 = $sxe->addChild('Item');
$item2->addChild('ItemName', 'Clothes');
$item2->addChild('ItemPrice', 3000);
$item2->addChild('Quantity', 15);

$item3 = $sxe->addChild('Item');
$item3->addChild('ItemName', 'Books');
$item3->addChild('ItemPrice', 5000);
$item3->addChild('Quantity', 3);

$item4 = $sxe->addChild('Item');
$item4->addChild('ItemName', 'Toys');
$item4->addChild('ItemPrice', 1200);
$item4->addChild('Quantity', 2);

$item5 = $sxe->addChild('Item');
$item5->addChild('ItemName', 'Earphones');
$item5->addChild('ItemPrice', 8000);
$item5->addChild('Quantity', 6);
$sxe->asXML('item.xml');

?>

