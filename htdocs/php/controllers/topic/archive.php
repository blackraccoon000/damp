<?php

namespace controllers\topic\archive;
use models\UserModel;
use db\TopicQuery;
use libs\Auth;
use libs\Msg;
use libs\Helper;

function get()
{
    Auth::requireSignIn();
    $user = UserModel::getSession();
    $topics = TopicQuery::fetchByUserId($user);

    if($topics === false) {
        /** 認証されたuser情報がおかしい */
        Msg::push(Msg::ERROR, "サインインしてください。");
        Helper::redirect("signin");
    }

    if(count($topics) > 0) {
        \views\topic\archive\index($topics);
    } else {
        echo "<div class='alert alert-primary'>トピックを投稿してみよう。</div>";
    }

    echo "<pre>";
    print_r($topics);
    echo "</pre>";
}

function post()
{
    echo '<p>POSTが呼ばれました(topic/archive)</p>';
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
