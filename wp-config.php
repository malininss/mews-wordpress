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
define( 'DB_NAME', 'mews' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cT6!9(DH6yfkePd`xjmOAu9:k=x]H3I9Scv,nH;fRM^!~W5s#<kFC&@rX@lPI*_z' );
define( 'SECURE_AUTH_KEY',  'zXV$>)Y]r#?o4VG2x(i=Dg&z{Yw5sNiq&(RX:i#=0]l-OH%R/RR,m7[z>&v[sj}N' );
define( 'LOGGED_IN_KEY',    '?qxy0-;(M.<FXv;Jf{O#;9jHtS-ok@ZZvW2684=38FUGg1OgdmrDh)q !]GwfVaj' );
define( 'NONCE_KEY',        'E=`9`C5OIj=_MEGf).[f,Vzp5]1r]}%`DkQHVMf>&LelaCAePLHUfPZiT;YOTY^1' );
define( 'AUTH_SALT',        'PE3O |*5N:A-nR&5v~ R+cS& @&i/^b/Fsc)<*Yez*u+K_=FI$`>X@z:37d*SvJI' );
define( 'SECURE_AUTH_SALT', 'V]E$[_E&.V)4@SRDBx:h96L^f]5`Zb.RYvHWDQ6O.k)8,y@<YLKmMJ?s,Col8I$p' );
define( 'LOGGED_IN_SALT',   'O;rkuphs*a,5Q$&KgP*W<Xdzbp@>8dV3))wTpdv oX9q7k%zs/r1FE=o!9zwql<2' );
define( 'NONCE_SALT',       'D0Aa0qL!Hz6)>;iUxyM*Q_ b6h r1-|@:b0 J9F2v_<9&N3e:tJ-bY&w7#.%~7{N' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
