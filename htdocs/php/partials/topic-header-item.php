<?php
  namespace partials;
  use models\TopicModel;
  function topicHeaderItem(TopicModel $topic,bool $from_top_page) {
?>
  <div class="row">
    <div class="col">
      <?php
        chart($topic);
      ?>
    </div>
    <div class="col my-5">
      <?php
        topicMain($topic,$from_top_page);
        topicCommentForm($topic);
      ?>
    </div>
  </div>
<?php
  };
?>