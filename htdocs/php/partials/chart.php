<?php
  namespace partials;
  function chart($topic) {
?>
      <canvas
      id="chart" width="400" height="400" data-likes="<?=$topic->likes ?>"
      ></canvas>
<?php
  };
?>