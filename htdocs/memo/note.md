\*\*\*\*# MVC アーキテクチャ

Model -> データの管理を担当。
View -> 画面の入出力を担当。
Controller -> ビジネスロジックを担当。

# mysql のログ

```
mysql>
mysql> show variables like 'general_log%'
    -> ;
+------------------+---------------------------------+
| Variable_name    | Value                           |
+------------------+---------------------------------+
| general_log      | OFF                             |
| general_log_file | /var/lib/mysql/5a8991ec03ea.log |
+------------------+---------------------------------+
2 rows in set (0.08 sec)

mysql>
mysql>
mysql>  set global general_log = on;
Query OK, 0 rows affected (0.04 sec)

mysql> show variables like 'general_log%'
    -> ;
+------------------+---------------------------------+
| Variable_name    | Value                           |
+------------------+---------------------------------+
| general_log      | ON                              |
| general_log_file | /var/lib/mysql/5a8991ec03ea.log |
+------------------+---------------------------------+
2 rows in set (0.02 sec)

mysql>
```

# mysql に外部接続する方法

docker の設定は下記

https://urashita.com/archives/33721

JDBC ドライバの設定を下記に設定
allowPublicKeyRetrieval true / useSSL false

# 複数ネットワークの設定

今後はこの辺りも履修予定
https://docs.docker.jp/compose/networking.html
