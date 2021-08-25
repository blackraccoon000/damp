<!-- <?php echo __FILE__; ?> -->
<main class="container py-3">
  <h1 class="h2 mb-3">トピック作成</h1>
    <div class="bg-white p-4 shadow mx-auto rounded">
      <form action="<?php echo CURRENT_URI; ?>" method="post" >
        <div class="mb-3">
          <label class="form-label">タイトル</label>
          <input id="topic-title" class="form-control" type="text" name="title">
        </div>
        <div class="mb-3">
          <label class="form-label">ステータス</label>
          <select name="status" id="topic-status" class="form-select">
            <option value="1">公開</option>
            <option value="0" selected>非公開</option>
          </select>
        </div>
        <div class="d-flex align-items-center">
          <div class="me-2 me-lg-5">
            <input  class="btn btn-primary shadow-sm" type="submit" value="送信" disabled>
          </div>
          <div>
            <a href="" class="">戻る</a>
          </div>
      </form>
    </div>
</main>
