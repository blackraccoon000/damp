<?php
namespace db;
use db\DataSource;
use models\TopicModel;

class TopicQuery
{
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
