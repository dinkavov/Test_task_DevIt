<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'movie-data');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%|XiLSis}XS)MucD7X8_:Z@(%MsBy-%_%xr/$-!>mP(c*$>5gGxDW}e t7[I>l?,');
define('SECURE_AUTH_KEY',  '=8{li*b`#lW)L~h!gK9%[OtQ*8PTz3VLANLs0HO)I%@,ji-<Bh?ljo9{ZL_Q_|u.');
define('LOGGED_IN_KEY',    ';Ns`}r>=jo7TQG[`cB=Sg vCSA|!DFn!L=y5Az_u^I!g_xp@%by*iEHo]vWhCg^ ');
define('NONCE_KEY',        '%$YV]eF3e.;zuv8[2a@q?B,a^}*:2c[XB!hPr)2q`+Ak*T[@tv>=YMvY<x*K*0l1');
define('AUTH_SALT',        'R<zWf$IQLPcTYWAAe*#GZ.v!>a+dp%U.c&?D>gw{j-n]aq7n!{]B31_06W4*,v|&');
define('SECURE_AUTH_SALT', '4f|lFM-f:V:xDh$y|k^SxpOVTN8~7%# U8}NL&w~GH{ZFS~~rr3@57}:/Yf-m3?N');
define('LOGGED_IN_SALT',   'uHc)JI8DI]-^:#2S5[IK(%9m3UdJgg|XmJT2K_GDhg;k&@hz=**o#`C^6OO<%Nw ');
define('NONCE_SALT',       '^7AZoJ2.d|w<c|kbSW53n D$QfCGomj6~`G7IETQ>6=PAQt9pFc-7E5=CZ[0;}Kd');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
