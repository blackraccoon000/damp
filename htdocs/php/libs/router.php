<?php
namespace libs;
use Throwable;

function route($rPath, $method)
{
    try {
        if ($rPath === '/') {
            $rPath = '/home';
        }
        if($rPath === '/favicon.ico') {
            return;
        } else {
            $targetFile = SOURCE_BASE . "controllers{$rPath}.php";
        }

        // $targetFile = SOURCE_BASE . "controllers/{$rPath}.php";
        // echo "target_file_path:".$targetFile;
        // echo CURRENT_URI;
        if (!file_exists($targetFile)) {
            Msg::push(Msg::ERROR, $targetFile);
            require_once SOURCE_BASE . 'views/404.php';
            return;
        }
        require_once $targetFile;
        $chk = strpos($rPath, '/') === 0 ? 1 : false;
        if ($chk) {
            $rPath = str_replace('/', '\\', $rPath);
        }
        $fn = "\\controllers{$rPath}\\{$method}";
        // Msg::push(Msg::ERROR, $fn);
        $fn();

    } catch (Throwable $th) {
        Msg::push(Msg::DEBUG, $th->getMessage());
        Msg::push(Msg::ERROR, '何か問題が発生しました');
        require_once SOURCE_BASE . 'views/404.php';
    }
}
?>
