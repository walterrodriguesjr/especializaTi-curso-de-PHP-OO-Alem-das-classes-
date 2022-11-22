<?php

interface PdfInterface 
{
    static public function generate($content);
    static public function printPdf($file);
}

class DOMPDF implements PdfInterface
{
    static public function generate($content)
    {
        return "<h1>{$content}</h1>";
    }

    static public function printPdf($file)
    {
        return $file;
    }
}

echo DOMPDF::generate('test');
