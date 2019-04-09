# bad_login

### Usage
以下のコマンドを順に叩くとサーバが立ち上がります。
``` 
git clone https://github.com/halkichi0308/bad_login.git
cd bad_login
docker-compose up -d
```

上記の``docker-compose``コマンド後にコンソールが以下の様になれば成功です。
``localhost:80``で画面を確認できます。
```
$docker-compose up -d
Creating mysql-server ... done
Creating php-nginx-alpine ... done
```

``/login``ページにいくつかの脆弱性があります。スキャンツール等で確認してみてください。  
[Login]押下時に送信されるリクエスト
* XSS
* SQLi
