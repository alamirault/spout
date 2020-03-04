<?php

use Box\Spout\Writer\Common\Creator\WriterEntityFactory;

require __DIR__ . '/vendor/autoload.php';

$writer = WriterEntityFactory::createXLSXWriter();
$writer->setShouldUseInlineStrings(false);
$writer->openToFile("./test.xls");

$data = [
    [1,2,3,4]
];

$numRows = 20000;
for ($i = 1; $i <= $numRows; $i++) {
    $writer->addRow(WriterEntityFactory::createRowFromArray(["xlsx--{$i}-1", "xlsx--{$i}-2", "xlsx--{$i}-3"]));
}

$writer->close();
