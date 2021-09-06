<?php
namespace db;
use db\DataSource;
use models\CommentModel;

class CommentQuery
{
    /** 指定したトピックID情報からpublishedで公開になっているCommentをピックアップする */
    public static function fetchByTopicIdComments($topic)
    {
        if(!$topic->isValidId()) {
            return false;
        }

        $db = new DataSource();
        $sql = '
        select c.*, u.nickname from comments c
        inner join users u on c.user_id = u.id
        where c.topic_id = :id and c.del_flg != 1 and u.del_flg != 1 and c.body != "" order by c.id desc;
        ';
        return $db->select(
            $sql,
            [
                "id" => $topic->id,
            ],
            DataSource::CLS,
            CommentModel::class
        );
    }
    /** 全コメント情報からpublishedで公開になっているCommentをピックアップする */
    public static function fetchPublishedComments()
    {
        $db = new DataSource();
        $sql = '
        select c.*, u.nickname
        from comments c
        inner join users u on c.user_id = u.id
        where c.del_flg != 1 and u.del_flg != 1 and c.body !="" order by c.id desc;
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
