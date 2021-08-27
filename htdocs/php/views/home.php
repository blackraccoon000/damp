<div class="container">
  <h1 class="visually-hidden">home directory</h1>
  <h3>GET</h3>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>signin" method="GET">
    <input type="submit" value="signin" />
  </form>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>register" method="GET">
    <input type="submit" value="Register" />
  </form>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>home" method="GET">
    <input type="submit" value="Home" />
  </form>

  <h3 class="mt-3">POST</h3>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>signin" method="POST">
    <input type="submit" value="signin" />
  </form>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>register" method="POST">
    <input type="submit" value="Register" />
  </form>
  <form action="<?php echo BASE_CONTEXT_PATH; ?>home" method="POST">
    <input type="submit" value="Home" />
  </form>
</div>