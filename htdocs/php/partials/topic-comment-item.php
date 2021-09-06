<?php
  namespace partials;
  function topicCommentItem() {
?>
  <ul class="list-unstyled">
    <li class="bg-white rounded shadow-sm mb-3 p-3">
      <h2 class="h4 mb-2">
        <span class="badge bg-success me-2 align-bottom">賛成</span>
        <a class="text-body" href="">そのコメントに賛成です。</a>
      </h2>
      <span>Commented by テストユーザー</span>
    </li>
    <li class="bg-white rounded shadow-sm mb-3 p-3">
      <h2 class="h4 mb-2">
        <span class="badge bg-danger me-2 align-bottom">反対</span>
        <a class="text-body" href="">そのコメントに反対です。</a>
      </h2>
      <span>Commented by テストユーザー</span>
    </li>
  </ul>
<?php
  };
?>