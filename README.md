# Laravel 10 快速向 Google Chat 發送通知

引入 guywarner 的 laravel-google-chat-alerts 套件來擴增快速向 Google Chat 發送通知，可以使用它來通知應用程式中發生的任何值得注意的事件。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/google-chat/send/` 來進行 Google Chat 通知發送。

----

## 畫面截圖
![](https://i.imgur.com/gzs7Wir.png)
> 必須是 Google Workspace 使用者才能建立 Webhook
