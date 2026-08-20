<?php
$codeerTalen = array("PHP", "HTML", "CSS", "Python", "C#", "SQL", "JavaScript");
sort($codeerTalen);
//rsort($codeerTalen); <--reverse sort

foreach ($codeerTalen as $taal){
    echo "$taal <br/>";
}

?>