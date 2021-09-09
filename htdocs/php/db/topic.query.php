<?php
namespace db;
use db\DataSource;
use models\TopicModel;
use models\UserModel;
class TopicQuery
{
    public static function fetchByUserId(UserModel $user)
    {
        // 暫定対応
        // if($user->isValidId()) {
        //     return false; // 暫定
        // }

        $db = new DataSource();
        $sql = '
            select * from topics
            where user_id = :id and del_flg != 1 order by id desc;
        ';
        return $db->select(
            $sql,
            [
                ':id' => $user->id,
            ],
            DataSource::CLS,
            TopicModel::class
        );
    }

    /** 全ユーザ情報からpublishedで公開になっている内容をピックアップする */
    public static function fetchPublishedTopics()
    {
        $db = new DataSource();
        $sql = '
        select
        t.*, u.nickname
        from topics t inner join users u on t.user_id = u.id
        where t.del_flg != 1 and u.del_flg != 1 and t.published = 1
        order by t.id desc;
        ';
        return $db->select(
            $sql,
            [],
            DataSource::CLS,
            TopicModel::class
        );
    }
    /** Topic情報からIdを取得する */
    public static function fetchById(TopicModel $topic)
    {
        if($topic->isValidId()) {
            return false;
        }
        $db = new DataSource();
        $sql = '
        select
        t.*, u.nickname
        from topics t inner join users u on t.user_id = u.id
        where t.id = :id and t.del_flg != 1 and u.del_flg != 1 and t.published = 1
        order by t.id desc;
        ';
        return $db->selectOne(
            $sql,
            [
                ":id" => $topic->id
            ],
            DataSource::CLS,
            TopicModel::class
        );
    }
    // public static function insert($user)
    // {
    //     $db = new DataSource();
    //     $sql =
    //         'insert into users(id,pwd,nickname) values (:id, :pwd, :nickname);';
    //     $hash = password_hash($user->pwd, PASSWORD_DEFAULT);

    //     return $db->execute(
    //         $sql,
    //         [
    //             ':id' => $user->id,
    //             ':pwd' => $hash,
    //             ':nickname' => $user->nickname,
    //         ],
    //         DataSource::CLS,
    //         TopicModel::class
    //     );
    // }
}
?>
