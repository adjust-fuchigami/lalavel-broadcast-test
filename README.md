# laravel-broadcast-test

## このリポジトリについて

下記のブログ記事で紹介したLaravelのBroadcast機能の動作テストです

* http://blog.adjust-work.com/?p=1968
* http://blog.adjust-work.com/?p=1996

## 動作確認環境

VirtualBox + Vagrantで構築した下記環境で動作を確認しています
* OS: [CentOS 7.3](https://app.vagrantup.com/bento/boxes/centos-7.3)
* PHP: 7.1.10
* node.js: 6.11.4
* Laravel: 5.5
* MySQL: 5.7.20
* Redis: 3.2.0i

## 動作確認方法

* リポジトリをgit cloneしたら下記のコマンドを実施してください
 * (/path/to/cloneにcloneした場合の例)
 * (別途、/path/to/clone/public をDocumentRootにして、nginxやapacheでhttpdサーバを立ててください)

```
$ cd /path/to/clone
$ composer install
$ npm install
$ npm install -g laravel-echo-server
$ laravel-echo-server init
$ laravel-echo-server start
```

