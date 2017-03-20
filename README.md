<h2>RU:</h2>

![](https://cloud.githubusercontent.com/assets/9499881/10269273/00dc25a0-6ae3-11e5-878c-474c7fe91d45.png)
![](https://cloud.githubusercontent.com/assets/9499881/10269270/f167f798-6ae2-11e5-89d6-cf9a63351366.png)<br>
Пользовательские данные погоды и акций для центра уведомлений iOS.<br>
Для использования необходимо развернуть http сервер, разместить на нем php файлы и убрать расширения файлов, с помощью [конфига в nginx](https://github.com/r57zone/Custom-data-notifications-center-iOS/blob/master/nginx.conf.txt) или [конфига apache](https://github.com/r57zone/Custom-data-notifications-center-iOS/blob/master/.htaccess). 
Далее необходимо добавить в файл устройства "/etc/hosts" 2 строки: "127.0.0.1	 iphone-wu.apple.com" (акции), "127.0.0.1	apple-mobile.query.yahooapis.com" (погода), где 127.0.0.1 адрес вашего http сервера.
<h2>EN:</h2>

Custom weather data and stocks to the notification center iOS.<br>
To use, you must deploy http server host a php file and remove the file extensions with [config in nginx](https://github.com/r57zone/Custom-data-notifications-center-iOS/blob/master/nginx.conf.txt) or [config apache](https://github.com/r57zone/Custom-data-notifications-center-iOS/blob/master/.htaccess).
Then to add to the device file "/etc/hosts" 2 lines: "127.0.0.1 iphone-wu.apple.com" (action), "127.0.0.1 apple-mobile.query.yahooapis.com" (weather), where 127.0.0.1 address your http server.
