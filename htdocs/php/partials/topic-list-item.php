<?php
  namespace partials;
  use models\TopicModel;
  function topicListItem(TopicModel $topic,string $title_url="",bool $with_status) {
    $publish_label = $topic->published ? "公開" : "非公開";
    $publish_cls = $topic->published ? "bg-primary" : "bg-danger";
?>
  <li class="row d-flex bg-white rounded shadow-sm mb-3 p-3 topic-hover-action">
    <div class="col-md d-flex align-items-center">
      <h2 class="mb-2 mb-md-0">
        <?php
          if($with_status):
        ?>
          <span class="badge <?=$publish_cls;?> me-2 align-bottom">
            <?=$publish_label;?>
          </span>
        <?php
          endif;
        ?>
        <a class="text-body" href="<?=$title_url;?>">
          <?=$topic->title?>
        </a>
      </h2>
    </div>
    <div class="col-auto mx-auto">
      <div class="text-center row">
        <div class="view col-auto min-w-100">
          <div class="h1 mb-0"><?=$topic->views?></div>
          <div class="mb-0">Views</div>
        </div>
        <div class="agree col-auto min-w-100 likes-green">
          <div class="h1 mb-0"><?=$topic->likes?></div>
          <div class="mb-0">賛成</div>
        </div>
        <div class="disagree col-auto min-w-100 dislikes-red">
          <div class="h1 mb-0"><?=$topic->dislikes?></div>
          <div class="mb-0">反対</div>
        </div>
      </div>
    </div>
  </li>
<?php
  };
?>