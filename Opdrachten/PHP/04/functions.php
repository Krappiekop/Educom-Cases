<?php
function show_header()
{
    echo "<html>
    <header>
    <h1>Dit is de header.</h1>
    </header>";

    return;
}

function show_content()
{
    echo "<body><p>Content</p></body>";
    return;
}

function show_footer()
{
    echo "
    <footer>
    <p>Author: Bartijn</p>
    </footer>
    </html>";
    return;
}

?>