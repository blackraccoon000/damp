# git pull & sass build
```
git clone https://github.com/blackraccoon000/damp.git
npm install
npm run sass
```
# create .env
```.env
MYSQL_ROOT_PASSWORD=password
MYSQL_DATABASE=pollapp
MYSQL_USER=test_user
MYSQL_PASSWORD=pwd
```
DB側設定はhtdocs/php/db/db_config.php
将来的に.envからデータを取得する設計に変更予定

# docker-compose up
```
docker-compose up -d --build
```

# docker-compose down
```
docker-compose up -d --build
```