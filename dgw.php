<?php 
//Apple iPhone v6.1 Stocks v3.0

/* 
Нефть	https://news.yandex.ru/quotes/1006.xml
USD		https://news.yandex.ru/quotes/1.xml
EUR		https://news.yandex.ru/quotes/23.xml	
*/

/* Timestamp
date_default_timezone_set('Europe/Moscow');
$date = new DateTime();
echo $date->getTimestamp(); */

// if ($_SERVER['REQUEST_URI']=='/dgw?imei=00000000-0000-0000-0000-000000000000&apptype=finance') : 
header('Content-Type: text/xml'); 
if (true) : //Для обновления данных "true", если необходимо добавить "акцию" - то false ?>
<?xml version="1.0" encoding="UTF-8"?><response><result type="getquotes" timestamp="1443703096"><list count="3" total="3"><quote><symbol>USD</symbol><price>66.0290</price><change>0.3790</change><marketcap>366.343B</marketcap><status>0</status><realtimets>1443643204</realtimets><realtimeprice>66.0290</realtimeprice><realtimechange>0.3790</realtimechange></quote><quote><symbol>EUR</symbol><price>74.1270</price><change>0.6970</change><marketcap>366.343B</marketcap><status>0</status><realtimets>1443643204</realtimets><realtimeprice>74.1270</realtimeprice><realtimechange>0.6970</realtimechange></quote><quote><symbol>Нефть Brent</symbol><price>48.22</price><change>0.04</change><marketcap>0B</marketcap><status>0</status><realtimets>1443643204</realtimets><realtimeprice>48.22</realtimeprice><realtimechange>0.04</realtimechange></quote></list></result></response>
<?php else : ?>
<?xml version="1.0" encoding="UTF-8"?><response><result type="getsymbol" timestamp="1443721097"><list count="3" total="3"><quote><name>Центробанк России</name><symbol>USD</symbol><type>Stock</type><exchange>ЦБ РФ</exchange><link></link></quote><quote><name>Центробанк России</name><symbol>EUR</symbol><type>Stock</type><exchange>ЦБ РФ</exchange><link></link></quote><quote><name>Яндекс</name><symbol>Нефть Brent</symbol><type>Stock</type><exchange>Яндекс</exchange><link></link></quote></list></result></response>
<?php 
endif; 
//endif; 
?>