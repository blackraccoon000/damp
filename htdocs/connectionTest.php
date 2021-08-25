<!DOCTYPE html>
<html>
    <head>
      <title>接続テスト</title>
    </head>
    <body>
      <h1>接続テスト1</h1>
      <?php
        $link = mysqli_connect('mysql','yutaka','pwd','test_phpdb');
        print_r("link:",$link);
        mysqli_set_charset($link,'utf8');
        $result = mysqli_query($link, 'SELECT * from mst_shops');
        print_r("result:",$result);
        $row = mysqli_fetch_assoc($result);
        var_dump($row);
      ?>

      <h1>接続テスト2</h1>
      <?php
        require_once "config.php";
        require_once SOURCE_BASE . 'models/abstract.model.php';
        require_once SOURCE_BASE . 'models/user.model.php';
        require_once SOURCE_BASE . 'db/data_source.php';
        require_once SOURCE_BASE . 'db/user.query.php';

        use \db\DataSource;
        $db = new DataSource();
        $id = 1;
        $sql = 'select * from mst_prefs u where id = :id ;';
        $result = $db->selectOne(
            $sql,
            [
                ':id' => $id,
            ],
        );
        var_dump($result);
    ?>
    </body>
<html>