<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'lib/html2pdf_v4.03/html2pdf.class.php';
include_once 'lib/scriptHandler.php';
$post = array("html", "format", "width", "height");
$handler = new scriptHandler($post);

if ($handler->isLoaded()) {
    $format = $handler->getRequest()->format;
    $imgName = time() . '.' . $format;
    $temporaryFile = 'temp.pdf';
    
    $html2pdf = new HTML2PDF('P', 'A4');
    $html2pdf->writeHTML($handler->getRequest()->html);
    $file = $html2pdf->Output($temporaryFile, 'F');
    $im = new Imagick($temporaryFile);
    $im->setImageFormat($format);
    
    $im->setSize($handler->getRequest()->width, $handler->getRequest()->height);
    $im->writeImage($imgName);
    $im->clear();
    $im->destroy();
    $handler->getJson()->name = $imgName;
}

echo ($handler->getJson());
die;