<?php
namespace controllers\register;
use libs\Auth;
use libs\Helper;
use models\UserModel;
use libs\Msg;

function get()
{
    \views\register\index();
}

function post()
{
    $user = new UserModel();
    $user->id = Helper::get_param('id', '');
    $user->pwd = Helper::get_param('pwd', '');
    $user->nickname = Helper::get_param('nickname', '');

    var_dump($user);

    if (Auth::regist($user)) {
        Msg::push(Msg::INFO, "{$user->nickname}さん、ようこそ");
        Helper::redirect(GO_HOME);
    } else {
        Helper::redirect(GO_REFERER);
    }
}

// require_once SOURCE_BASE . 'partials/link.php';

?>
