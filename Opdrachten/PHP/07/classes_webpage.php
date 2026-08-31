<?php

class WebPage
{
    public $Opmaak;
    public function __construct($title = "Onbekend"){
    $this->Opmaak = "  <!doctype html>
                            <html>
                            <head>
                            <title>$title</title>
                            </head>
                                <body>";
    echo $this->Opmaak;
    }

    public function showContent($Content)
    {
    $this->Opmaak = "<p>$Content</p>";
    echo $this->Opmaak;
    }

    public function showFooter(){
        $this->Opmaak = "</body>
        </html>";
        echo $this->Opmaak;
    }
}


