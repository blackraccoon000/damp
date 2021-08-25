<!-- <?php echo __FILE__; ?> -->
<main class="container py-3">
  <h1 class="visually-hidden">signIn Page</h1>
    <div class="mt-5">
    <div class="text-center mb-4">
      <img src="<?php echo BASE_IMAGE_PATH; ?>logo.svg" alt="みんなのアンケート site-log" width="65">
    </div>
    <div class="bg-white p-4 shadow login-form mx-auto rounded">
      <form action="<?php echo CURRENT_URI; ?>" method="post" >
        <div class="mb-3">
          <label class="form-label">ユーザID:</label>
          <input id="userId" class="form-control" type="text" name="id">
        </div>
        <div class="mb-3">
          <label class="form-label">パスワード:</label>
          <input id="password" class="form-control" type="password" name="pwd">
        </div>
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <a href="" class="">アカウント登録</a>
          </div>
          <div>
            <input  class="btn btn-primary shadow-sm lg" type="submit" value="サインイン">
          </div>
      </form>
    </div>
  </div>
</main>
