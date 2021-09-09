<?php
require_once 'config.php';

// libraryの読み込み
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';
require_once SOURCE_BASE . 'libs/router.php';

// modelの読み込み
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';
require_once SOURCE_BASE . 'models/topic.model.php';
require_once SOURCE_BASE . 'models/comment.model.php';

// messageの読み込み + models/abstract.model.phpが必要
require_once SOURCE_BASE . 'libs/message.php';

// dbとの接続
require_once SOURCE_BASE . 'db/data_source.php';
require_once SOURCE_BASE . 'db/user.query.php';
require_once SOURCE_BASE . 'db/topic.query.php';
require_once SOURCE_BASE . 'db/comment.query.php';

// partialsとの接続
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';
require_once SOURCE_BASE . 'partials/topic-list-item.php';
require_once SOURCE_BASE . 'partials/chart.php';
require_once SOURCE_BASE . 'partials/topic-main.php';
require_once SOURCE_BASE . 'partials/topic-header-item.php';
require_once SOURCE_BASE . 'partials/topic-comment-form.php';
require_once SOURCE_BASE . 'partials/comments/auth-true.php';
require_once SOURCE_BASE . 'partials/comments/auth-false.php';

// viewsとの接続
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/signin.php';
require_once SOURCE_BASE . 'views/register.php';
require_once SOURCE_BASE . 'views/topic/archive.php';
require_once SOURCE_BASE . 'views/topic/detail.php';


// session_startを呼び出す modelの前だとerror
session_start();

try {
    \partials\header();

    // 先頭行の"/"を消去、リンクに存在する"?"文字列を削除
    // クエリ文字列を使うなら、この辺りを調節しないと問題が発生する。
    $url = parse_url(CURRENT_URI);
    // $rPath = preg_replace("/(^\/|\?)/i", '', $_SERVER['REQUEST_URI']);
    // $rPath = str_replace(BASE_CONTEXT_PATH, "", $url["path"]);
    $rPath = $url["path"];
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    // $a = preg_replace("/\?/i", '', $_SERVER['REQUEST_URI']);

    libs\route($rPath, $method);

    \partials\footer();
} catch (\Throwable $th) {
    die('<h1>致命的なエラーです。</h1><p>サーバ管理者へ連絡ください</p>');
}

?>
