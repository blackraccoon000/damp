<?php
namespace controllers\signin;
use libs\Auth;
use libs\Helper;
use libs\Msg;
use models\UserModel;

function get()
{
    \views\signin\index();
}

function post()
{
    $user = new UserModel();
    $user->id = Helper::get_param('id', '');
    $user->pwd = Helper::get_param('pwd', '');

    if (Auth::signIn($user)) {
        Msg::push(Msg::INFO, "{$user->nickname}さん、ようこそ");
        Helper::redirect(GO_HOME);
    } else {
        Helper::redirect(GO_REFERER);
    }
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
