<?php

namespace controllers\topic\detail;

function get()
{
    require_once SOURCE_BASE . 'views/topic/detail.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(topic/detail)</p>';
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
