<?php
class config
{
	function get($id)
	{
		$arr = array(
		/*##################################################################################################
		## Подключение к базе данных
		##		dbhost:			IP-адрес или доменное имя, где запущен сервер MySQL.
		##		dbuser:			Имя пользователя для подключения к серверу MySQL.
		##		dbpass:			Пароль пользователя для подключения к серверу MySQL.
		##		mangos:			Имя базы данных игрового мира (обычно: mangos).
		##		realmd:			Имя базы данных учётных записей (обычно: realmd).
		##		characters:		Имя базы данных персонажей (обычно: characters).
		##		bugtracker:		Имя базы данных багтрекера (обычно: bugtracker).
		##################################################################################################*/
		"dbhost"		=> "localhost",
		"dbuser"		=> "root",
		"dbpass"		=> "root",
		"mangos"		=> "mangos",
		"realmd"		=> "realmd",
		"characters"	=> "characters",
		"bugtracker"	=> "bugtracker",
		/*##################################################################################################
		## Настройки сайта
		##		title:			Название Баг-трекера (отображается между тегами <title></title>).
		##		mingm:			Минимальный уровень доступа для входа в админпанель.
		##		pagepath:		Папка на сайте, где находятся исполняющие файлы.
		##		main:			IP-адрес или доменное имя сайта.
		##		progressbar:	Отображение прогресс-баров на страницах со списками (булева переменная).
		##		anim:			Анимация прогресс-баров на страницах со списками (булева переменная).
		##		LinkAccount:	Ссылка на страницу детального просмотра учётной записи или false, если ссылка не нужна.
		##		LinkPlayer:		Ссылка на страницу детального просмотра персонажа или false, если ссылка не нужна.
		##		searchlimit:	Ограничение на количество выводимых результатов поиска.
		##		lang:			Язык выводимых результатов (8: русский, 1: английский).
		##		size_limit:		Ограничение (в байтах) на размер загружаемых изображений.
		##################################################################################################*/
		"title"			=> "Баг-трекер",
		"mingm"			=> 3,
		"pagepath"		=> "pages/",
		"main"			=> "http://localhost/bugtracker/",
		"progressbar"	=> true,
		"anim"			=> false,
		"LinkAccount"	=> "http://localhost/admin/account.php?id=",
		"LinkPlayer"	=> "http://localhost/admin/player.php?guid=",
		"searchlimit"	=> 17,
		"lang"			=> 8,
		"size_limit"	=> 500000,
		/*##################################################################################################
		## Настройки администрирования
		##		CheckVersion:	Проверять страницу проекта на github на предмет выхода обновлений.
		##		version:		Текущая версия баг-трекера. Не изменяйте!
		##		checkdiff:		Интервал в днях для повторной проверки обновлений.
		##		installquery:	Количество запросов в базу данных при установке. Не изменяйте!
		##################################################################################################*/
		"CheckVersion"	=> false,
		"version"		=> 41,
		"checkdiff"		=> 2,
		"installquery"	=> 215,
		/*##################################################################################################
		## Внешние ресурсы
		##		Database:		Ссылка на базу данных wow (по умолчанию: http://ru.wowhead.com/).
		##		wd_quest:	 	Параметр, указывающий на область поиска по квестам по сайту базы данных wow.
		##		wd_item:		Параметр, указывающий на область поиска по предметам по сайту базы данных wow.
		##		wd_npc:			Параметр, указывающий на область поиска по НИП-ам по сайту базы данных wow.
		##		wd_object:		Параметр, указывающий на область поиска по объектам по сайту базы данных wow.
		##
		##						Пример 1:
		##						Если http://ru.wowhead.com/, то ссыка на квест будет выглядеть так:
		##						http://ru.wowhead.com/?quest=12345. ?quest= - необходимый параметр.
		##
		##						Пример 2:
		##						Если http://wowdata.ru/, то ссылка на предмет будет выглядеть так:
		##						http://wowdata.ru/item.html?id=12345. item.html?id= - необходимый параметр.
		*/##################################################################################################
		"Database"		=> "http://ru.wowhead.com/",
		"wd_quest"		=> "quest=",
		"wd_item"		=> "item=",
		"wd_npc"		=> "npc=",
		"wd_object"		=> "object="
		);
		
		if(in_array($id,array_keys($arr)))
			return $arr[$id];
	}
}

$cfg = new config;
@mysql_connect($cfg->get("dbhost"),$cfg->get("dbuser"),$cfg->get("dbpass"));
@mysql_query("SET NAMES 'UTF8'");
?>