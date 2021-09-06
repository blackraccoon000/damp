<?php
  namespace partials\comments;
  use libs\Helper;
  function authTrue ($topic) {
?>
<form action="<?=Helper::get_url('topic/detail'); ?>" method="POST">
  <span class="h4">あなたは賛成？それとも反対？</span>
  <input type="hidden" name="topic_id" value="3" value="<?=$topic->id;?>">
  <div class="form-group">
    <textarea class="w-100 border-light" name="body" id="body" rows="5"></textarea>
  </div>
  <div class="container">
    <div class="row h5 form-group">
      <div class="col-auto d-flex align-items-center ps-0">
        <div class="form-check-inline">
          <input
            class="form-check-input mt-0"
            type="radio" id="agree" name="agree"
            value="1"
          >
          <label for="agree" class="form-check-label">賛成</label>
          <input
            class="form-check-input mt-0"
            type="radio" id="disagree" name="disagree"
            value="0"
          >
          <label for="disagree" class="form-check-label col">反対</label>
        </div>
      </div>
      <input class="btn btn-success shadow col" type="submit" value="送信">
    </div>
  </div>
</form>
<?php
  };
?>