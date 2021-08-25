<?php

namespace controllers\topic\create;

function get()
{
    require_once SOURCE_BASE . 'views/topic/create.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(topic/create)</p>';
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
