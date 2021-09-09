<?php
  namespace views\topic\detail;
  use libs\Helper;
  use partials;
?>
  <?php
    function index($topic,$comments) {
      \partials\topicHeaderItem($topic,false);
  ?>
  <ul class="list-unstyled">
    <?php
      foreach($comments as $comment) :
    ?>
    <?php
      $agree_label = $comment->agree ? "賛成" : "反対";
      $agree_class = $comment->agree ? "bg-success" : "bg-danger";
    ?>
    <li class="bg-white rounded shadow-sm mb-3 p-3">
      <h2 class="h4 mb-2">
        <span class="badge <?=$agree_class ?> me-2 align-bottom">
          <?=$agree_label ?>
        </span>
        <span>
          <?=$comment->body;?>
        </span>
      </h2>
      <span>Commented by <?=$comment->nickname?></span>
    </li>
    <?php
      endforeach;
    ?>
  </ul>
  <?php
    };
  ?>
</div>