<?php
/**
* Russian language file for NUT module
*
*/

$dictionary=array(

/* general */
'MAC_INFO'=>'Уникальный серийный номер устройства мониторинга.',
'MAC_TEXT'=>"Предназначен для идентификации устройства в проекте и привязки к его владельцу и к карте в разделе Датчики. Состоит из 12-18 символов A-Z и 0-9 иногда разделенных '-' или ':'. Для обеспечения уникальности рекомендуется использовать MAC-адрес сетевого интерфейса вашего устр-ва мониторинга или компьютера, который можно узнать выполнив командной строке getmac или ipconfig в Windows и ifconfig в Linux. Допускается привязка нескольких устр-в с разными MAC к одному владельцу.",
'NAME_INFO'=>"Название устройства мониторинга (не обязательное)",
'FOR_OUTDATA'=>"Для передачи",
'FOR_INDATA'=>"Для приёма",
'RECEIVE'=>"Принять",
'SID_INFO'=>"Id устр-ва из ссылки вида http://narodmon.ru/ID в балуне на карте;",
'MACDEV_INFO'=>"Уникальные серийные номера датчиков подключенных к устройству",
'MACDEV_TEXT'=>"Предназначены для идентификации датчиков в проекте и привязки их показаний к устр-ву мониторинга. Для популярных датчиков температуры семейства DS18x20 он представляет собой 16 знаков 0-F.
Для датчиков без собственных серийных номеров (к примеру аналоговых) рекомендуется использовать следующие mac для корректного автоопределения типа данных:
T1-T99 температура, H1-H99 влажность, P1-P99 давление, L1-L99 освещенность, W1-W99 мощность, U1-U99 напряжение, I1-I99 сила тока, R1-R99 радиация, S1-S99 сухой контакт, RX/TX трафик, CO2 концентрация.
Можно указать в качестве mac название датчика на латинице без пробелов и знаков, но в этом случае тип данных придется указать вручную в разделе Датчики.
Регистрация всех датчиков, подключенных к устр-ву, происходит автоматически при первой отправке их показаний на narodmon.ru.",
'DEVTITLE_INFO'=>"Названия датчиков (не обязательное)",
'DEVTITLE_TEXT'=>"Необязательное к передаче название датчика по факту переименования однократно. В случае, если данный параметр не пустая строка, то название датчика на сервере меняется на полученное от устройства.",
'SEND_INFO'=>"Если стоит флажок то данные этого датчика будут передаваться на сайт"
/* end module names */

);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
} 