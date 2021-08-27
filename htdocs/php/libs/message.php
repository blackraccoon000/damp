<?php
namespace libs;
use models\AbstractModel;
/**
 * MessageをSession情報として格納/表示するクラス
 */
class Msg extends AbstractModel
{
    protected static $SESSION_NAME = '_msg';
    public const ERROR = 'error';
    public const INFO = 'info';
    public const DEBUG = 'debug';

    public static function push($type, $msg)
    {
        if (!is_array(static::getSession())) {
            static::init();
        }
        $msgs = static::getSession();
        $msgs[$type][] = $msg;
        static::setSession($msgs);
    }

    /**
     * messageの初期化
     */
    private static function init()
    {
        static::setSession([
            static::ERROR => [],
            static::INFO => [],
            static::DEBUG => [],
        ]);
    }

    public static function flush()
    {
        try {
            $msg_with_type = static::getSessionAndFlush() ?? [];

            echo '<div id="messages">';

            foreach ($msg_with_type as $type => $msgs) {
                if ($type === static::DEBUG && !DEBUG) {
                    continue; // 次のループを処理する
                }

                $color = $type === static::INFO ? 'alert-info' : 'alert-danger';

                foreach ($msgs as $msg) {
                    echo "<div class='alert {$color}'>{$type}:{$msg}</div>";
                }
            }

            echo '</div>';

        } catch (\Throwable $th) {
            Msg::push(Msg::DEBUG, $th->getMessage());
            Msg::push(Msg::ERROR, 'Msg::Flushで例外が発生しました。');
        }
    }
}

?>
