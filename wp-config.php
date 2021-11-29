<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'simple' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5LzIqFJm:I~)d2wB 8?^sQ*6#RVn qQ38TrkYjAYXYgeD0}[D/da;/|<4HhuuQIa' );
define( 'SECURE_AUTH_KEY',  '-$+hCy&vh002/&+oP(_*T>#r@Q@iVnH$>CX.kfV:O/h|>dMDAXA?Z_K9.6CE0cm.' );
define( 'LOGGED_IN_KEY',    'HPv,?tx!TtMBKx<a2i(-C`GU*Qlw*5rS%~b*JP#.c1,#X!n34uYeY679F5JjfRG_' );
define( 'NONCE_KEY',        'GH6YPoLIpg02I_ZwU)bq<i*F~.X,WCQ+)g(6y:MY& Z%f/UyWj<,fm(Xe/{WtWY+' );
define( 'AUTH_SALT',        'Hkaa)<[PX.Av@:*H>4pF<m,a_dx3poQ1~3C6,P8)eO)lXE5:b!oC/qC{{-1:&J7e' );
define( 'SECURE_AUTH_SALT', '*_]qA]fqUB1D@zgu_U|fD/&q!JNcOROvhGyu&qbxz&<o:|ci#;b;]a|;TxYHRNgB' );
define( 'LOGGED_IN_SALT',   '&[prvJ5joW]M&3&uTS0!@_8vRd7UGxnv5|s7m?ZY.If$I1sV$ O_skv@JGCUz8@1' );
define( 'NONCE_SALT',       ':R@:OXwDAeF[s}rZ~_ob5NG&bTkOz[8sfsj;[+W64r/z~waR_y6{[lu;_JrC5F(}' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
