<?php
namespace controllers\home;
use libs\Auth;
use db\TopicQuery;

function get()
{
    // Auth::requireSignIn();
    $topics = TopicQuery::fetchPublishedTopics();
    \views\home\index($topics);
}

function post()
{
    echo '<p>POSTが呼ばれました(home)</p>';
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
