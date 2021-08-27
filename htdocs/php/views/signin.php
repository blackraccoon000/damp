<?php
  namespace views\signin;
  use libs\Helper;
  function index() {
?>
<h1 class="visually-hidden">signIn Page</h1>
  <div class="mt-5">
  <div class="text-center mb-4">
    <img src="<?php echo BASE_IMAGE_PATH; ?>logo.svg" alt="みんなのアンケート site-log" width="65">
  </div>
  <div class="bg-white p-4 shadow signin-form mx-auto rounded">
    <form action="<?php echo CURRENT_URI; ?>" method="post" >
      <div class="mb-3">
        <label class="form-label" for="id">ユーザID:</label>
        <input id="id" class="form-control" type="text" name="id">
      </div>
      <div class="mb-3">
        <label class="form-label" for="pwd">パスワード:</label>
        <input id="pwd" class="form-control" type="password" name="pwd">
      </div>
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <a href="<?php Helper::the_url("register") ?>" class="">アカウント登録</a>
        </div>
        <div>
          <input  class="btn btn-primary shadow-sm lg" type="submit" value="サインイン">
        </div>
    </form>
  </div>
</div>
<?php
  };
?>