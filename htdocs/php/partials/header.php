<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>みんなのアンケート</title>
  <link rel="preconnect" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_CSS_PATH; ?>style.css">
</head>
<body>
<div id="container">
  <header class="container my-2">
    <?php
    // メッセージ
    use libs\Msg;
    Msg::flush();
    ?>
    <?php
    // ログイン情報
    use libs\Auth;
    if (Auth::isSignIn()) {
        echo '<p>ログイン中です。</p><a href="/logout">logout</a>';
    } else {
        echo '<p>ログインしていません。</p>';
    }
    ?>
    <nav class="row align-items-center py-2">
      <a href="/" class="col-md d-flex align-items-center mb-3 mb-md-0">
        <img src="<?php echo BASE_IMAGE_PATH; ?>logo.svg" alt="みんなのアンケート site-log" width="50" class="me-2">
        <span class="h2 mb-0 fw-bold">みんなのアンケート</span>
      </a>
      <div class="col-md-auto">
        <!-- ログイン前の場合下記 -->
        <div class="mb-2">
          <a href="" class="btn btn-primary me-2">登録</a>
          <a href="" >ログイン</a>
        </div>
        <!-- ログイン済みの場合下記 -->
        <div>
          <a href="/topic/create" class="btn btn-primary me-2">投稿</a>
          <a href="/topic/archive" class="me-2">過去の投稿</a>
          <a href="" >ログアウト</a>
        </div>
      </div>
    </nav>
  </header>
