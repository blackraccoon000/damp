<?php
namespace models;
use libs\Msg;
use libs\Helper;
class TopicModel extends AbstractModel
{
    public int $id;
    public string $title;
    public int $published;
    public int $views;
    public int $likes;
    public int $dislikes;
    public string $user_id;
    public string $nickname;
    public int $del_flg;

    protected static $SESSION_NAME = '_topic';

    public function isValidId()
    {
        return false;
    }

    // public function isValidPwd()
    // {
    //     return static::validatePwd($this->pwd);
    // }

    // public function isValidNickname()
    // {
    //     return static::validateNickname($this->nickname);
    // }

    // private static function validateId($val)
    // {
    //     $res = true;
    //     if (empty($val)) {
    //         Msg::push(Msg::ERROR, 'ユーザIDを入力してください。');
    //         $res = false;
    //     } else {
    //         if (strlen($val) > 10) {
    //             Msg::push(Msg::ERROR, 'ユーザIDは10桁以下で入力してください');
    //             $res = false;
    //         }
    //         if (!Helper::isAlNum($val)) {
    //             Msg::push(Msg::ERROR, 'ユーザIDは半角英数字で入力してください');
    //             $res = false;
    //         }
    //     }
    //     return $res;
    // }

    // private static function validatePwd($val)
    // {
    //     $res = true;
    //     if (empty($val)) {
    //         Msg::push(Msg::ERROR, 'パスワードを入力してください。');
    //         $res = false;
    //     } else {
    //         if (strlen($val) <= 4) {
    //             Msg::push(Msg::ERROR, 'パスワードは4桁以上で入力してください');
    //             $res = false;
    //         }
    //         if (!Helper::isAlNum($val)) {
    //             Msg::push(
    //                 Msg::ERROR,
    //                 'パスワードは半角英数字で入力してください'
    //             );
    //             $res = false;
    //         }
    //     }
    //     return $res;
    // }

    // private static function validateNickname($val)
    // {
    //     $res = true;
    //     if (empty($val)) {
    //         Msg::push(Msg::ERROR, 'ニックネームを入力してください。');
    //         $res = false;
    //     } else {
    //         if (mb_strlen($val) > 10) {
    //             Msg::push(
    //                 Msg::ERROR,
    //                 'ニックネームは10桁以下で入力してください'
    //             );
    //             $res = false;
    //         }
    //         // if (!Helper::isAlNum($val)) {
    //         //     Msg::push(
    //         //         Msg::ERROR,
    //         //         'パスワードは半角英数字で入力してください'
    //         //     );
    //         //     $res = false;
    //         // }
    //     }
    //     return $res;
    // }
}
?>
