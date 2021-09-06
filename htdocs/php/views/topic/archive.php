<?php
  namespace views\topic\archive;
  use partials;
  use libs\Helper;
  function index($topics) {
?>

<h1 class="h2 mb-3">過去の投稿</h1>
<ul class="container">
    <?php
      foreach($topics as $topic) {
        $title_url = Helper::get_url("topic/edit?topic_id=".$topic->id);
        partials\topicListItem($topic,$title_url,true);
      }
    ?>
</ul>

<?php
  };
?>