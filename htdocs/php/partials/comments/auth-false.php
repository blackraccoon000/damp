<?php
  namespace partials\comments;
  use libs\Helper;
  function authFalse() {
?>
<div class="text-center mt-5">
  <div class="mb-2">サインインしてアンケートに参加しよう！</div>
  <a href="<?=Helper::get_url('signin')?>" class="btn btn-lg btn-success">サインインはこちら</a>
</div>
<?php
  };
?>