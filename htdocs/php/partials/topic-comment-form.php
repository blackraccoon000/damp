<?php
  namespace partials;
  use libs\Auth;
  function topicCommentForm ($topic) {
    if(Auth::isSignIn()) {
      comments\authTrue ($topic);
    } else {
      comments\authFalse();
    }
  };
?>