<?php
  namespace partials;
  use libs\Helper;
  function topicMain($topic,bool $from_top_page) {
?>
  <div>
    <?php if($from_top_page): ?>
      <h1 class="visually-hidden">みんなのアンケート</h1>
      <h2 class="h1">
        <a href="<?=Helper::get_url('topic/detail?topic_id='.$topic->id); ?>" class="text-body"><?=$topic->title?></a>
      </h2>
    <?php else : ?>
      <h1><?=$topic->title?></h1>
    <?php endif; ?>
    <span class="mr-1 h5">Posted by <?=$topic->nickname?></span>
    <span class="mr-1 h5">&bull;</span>
    <span class="h5"><?=$topic->views?> views</span>
  </div>
  <div class="container my-4">
    <div class="row justify-content-around">
      <div class="col-auto likes-green">
        <div class="display-1"><?=$topic->likes?></div>
        <div class="h4 mb-0 text-center">賛成</div>
      </div>
      <div class="col-auto dislikes-red">
        <div class="display-1"><?=$topic->dislikes?></div>
        <div class="h4 mb-0 text-center">反対</div>
      </div>
    </div>
  </div>
<?php
  };
?>