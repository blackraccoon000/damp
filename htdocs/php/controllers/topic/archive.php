<?php

namespace controllers\topic\archive;

function get()
{
    require_once SOURCE_BASE . 'views/topic/archive.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(topic/archive)</p>';
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
