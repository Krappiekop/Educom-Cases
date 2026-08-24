<?php
include 'classes_webpage.php';

$Page = new WebPage('Nieuwe Webpagina');
$Page->showContent("Inhoud.");
$Page->showFooter();

?>