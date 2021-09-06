<?php
  namespace partials;
  use libs\Msg;
  use libs\Helper;
  use libs\Auth;

  function header() {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>みんなのアンケート</title>
  <link rel="shortcut icon" href="<?=BASE_IMAGE_PATH;?>favicon.ico">
  <link rel="preconnect" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=BASE_CSS_PATH; ?>style.css">
</head>
<body>
<div id="container">
  <header class="container my-2">
    <?php
    // if (Auth::isSignIn()) {
    //     echo '<p>ログイン中です。</p><a href="/signout">signout</a>';
    // } else {
    //     echo '<p>ログインしていません。</p>';
    // }
    ?>
    <nav class="row align-items-center py-2">
      <a href="<?php Helper::the_url("/") ?>" class="col-md d-flex align-items-center mb-3 mb-md-0">
        <img src="<?=BASE_IMAGE_PATH; ?>logo.svg" alt="みんなのアンケート site-log" width="50" class="me-2">
        <span class="h2 mb-0 fw-bold">みんなのアンケート</span>
      </a>
      <div class="col-md-auto">
        <?php
          if (Auth::isSignIn()) :
        ?>
        <?php // サインイン済みの場合下記 ?>
        <div>
          <a href="<?php Helper::the_url("topic/create") ?>" class="btn btn-primary me-2">投稿</a>
          <a href="<?php Helper::the_url("topic/archive") ?>" class="me-2">過去の投稿</a>
          <a href="<?php Helper::the_url("signout") ?>" >サインアウト</a>
        </div>
        <?php
          else:
        ?>
        <?php // サインイン前の場合下記 ?>
        <div class="mb-2">
          <a href="<?php Helper::the_url("register") ?>" class="btn btn-primary me-2">登録</a>
          <a href="<?php Helper::the_url("signin") ?>" >サインイン</a>
        </div>
        <?php
          endif;
        ?>
      </div>
    </nav>
  </header>
  <main class="container py-3">
<?php
  Msg::flush();
  };
?>