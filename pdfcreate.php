<?php
require 'pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("rakibalom", "4fc491a83f7bca71065075ae54d2255c");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("index.html", "application_bti.pdf");
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>