<?php
namespace libs;
use db\UserQuery;
use models\UserModel;

class Auth
{
    /**
     * ユーザ認証に関する関数
     */
    public static function signIn(UserModel $user)
    {
        try {
            if (!($user->isValidId() * $user->isValidPwd())) {
                return false;
            }
            $is_success = false;
            $fetchUser = UserQuery::fetchById($user->id);

            if (!empty($fetchUser) && $fetchUser->del_flg !== 1) {
                if (password_verify($user->pwd, $fetchUser->pwd)) {
                    $user->nickname = $fetchUser->nickname;
                    $is_success = true;
                    UserModel::setSession($fetchUser);
                } else {
                    Msg::push(Msg::ERROR, 'パスワードが一致しません');
                }
            } else {
                Msg::push(Msg::ERROR, 'ユーザが見つかりません');
            }
        } catch (\Throwable $th) {
            $is_success = false;
            Msg::push(Msg::DEBUG, $th->getMessage());
            Msg::push(
                Msg::ERROR,
                'サインイン処理に問題が発生しました。少し時間をおいてから再度お試しください'
            );
        }
        return $is_success;
    }

    /**
     * ユーザ登録に関する関数
     */
    public static function regist($user)
    {
        try {
            if (
                !(
                    $user->isValidId() *
                    $user->isValidPwd() *
                    $user->isValidNickname()
                )
            ) {
                return false;
            }
            $is_success = false;

            /**
             * 既に登録されているIDでないことを確認する。
             */
            $exist_user = UserQuery::fetchById($user->id);

            if (!empty($exist_user)) {
                Msg::push(Msg::ERROR, 'ユーザが既に存在しています');
                return $is_success;
            }

            $is_success = UserQuery::insert($user);

            if ($is_success) {
                UserModel::setSession($user);
            }
        } catch (\Throwable $th) {
            $is_success = false;
            Msg::push(Msg::DEBUG, $th->getMessage());
            Msg::push(
                Msg::ERROR,
                'ユーザ登録作業に問題が発生しました。少し時間をおいてから再度お試しください'
            );
        }
        return $is_success;
    }

    /**
     * ユーザがサインイン状態かを確認する
     */
    public static function isSignIn()
    {
        try {
            $user = UserModel::getSession();
        } catch (\Throwable $th) {
            UserModel::clearSession();
            Msg::push(Msg::DEBUG, $th->getMessage());
            Msg::push(
                Msg::ERROR,
                'エラーが発生しました。再度ログインを行ってください'
            );
            return false;
        }
        if (isset($user)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * ユーザのサインアウトを実施
     */
    public static function signOut()
    {
        try {
            UserModel::clearSession();
        } catch (\Throwable $th) {
            UserModel::clearSession();
            Msg::push(Msg::DEBUG, $th->getMessage());
            return false;
        }
        return true;
    }

    public static function requireSignIn() {
        if(!static::isSignIn()) {
            Msg::push(Msg::ERROR, "サインインしてください。");
            Helper::redirect("signin");
        }
    }
}
?>
