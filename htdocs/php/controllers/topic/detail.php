<?php

namespace controllers\topic\detail;

use db\CommentQuery;
use models\TopicModel;
use db\TopicQuery;
use libs\Auth;
use libs\Msg;
use libs\Helper;

function get()
{
    $topic = new TopicModel;
    $topic->id = Helper::get_param('topic_id','',false);
    $fetchedTopic = TopicQuery::fetchById($topic);
    $comments = CommentQuery::fetchByTopicId($topic);

    if(!$fetchedTopic) {
        Msg::push(Msg::ERROR, "トピックが見つかりません。");
        Helper::redirect("404");
    }

    // \views\topic\detail\index($topic,$comments);
    \views\topic\detail\index($fetchedTopic,$comments);
}

function post()
{
    echo '<p>POSTが呼ばれました(topic/detail)</p>';
}

?>
