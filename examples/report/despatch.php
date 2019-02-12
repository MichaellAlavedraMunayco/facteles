<?php

require __DIR__ . '/../../vendor/autoload.php';

$util = Util::getInstance();

$document = $util->getDespatch();

try {
    $pdf = $util->getPdf($document);
    $util->showPdf($pdf, $document->getName().'.pdf');
} catch (Exception $e) {
    var_dump($e);
}