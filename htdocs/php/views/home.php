<?php
  namespace views\home;
  use libs\Helper;
  use partials;
?>
<div class="container">
<h1 class="visually-hidden">home directory</h1>
  <?php
    function index($topics) {
      $topic = array_shift($topics);
      \partials\topicHeaderItem($topic,true);
  ?>
  <ul class="container">
      <?php
        foreach($topics as $topic) {
          $title_url = Helper::get_url("topic/detail?topic_id=".$topic->id);
          partials\topicListItem($topic,$title_url,false);
        }
      ?>
  </ul>
  <?php
    };
  ?>
</div>