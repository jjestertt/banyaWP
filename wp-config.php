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
define( 'DB_NAME', 'dombanya' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lM+@UUS7WfDTctgfYhbFZWHQ[3$$g1mp(hZ9{[MDtA8Kh3US</MQ}jM`<j{z&t0A' );
define( 'SECURE_AUTH_KEY',  'y{k68`1tkB?9-DKu0CW^_Qn--RC.W-?0[[0tsL`_e5rEO~Qp7K<7Q-fS=<8Ab!_=' );
define( 'LOGGED_IN_KEY',    'K1t7,eXae#iz<o>Ag!Md>Q%MKy$,PLumu(ku#*^Z@xvUk~!b$-5oXN95{sAEqoA}' );
define( 'NONCE_KEY',        '();v}}In4;C<`BO!D1+m8csaz)%*P4t;*.2X]:CO1h*Sj,2|wV3CU0m`(c3r9 Km' );
define( 'AUTH_SALT',        '_?2i=<bncmofP7dL:aWoN2M%R`/aFM#zrC@yV,B*~g[MR,=nBil*gZ*N!8]b> u<' );
define( 'SECURE_AUTH_SALT', 'FMg?W1 S`i${B]%D:SmA>uaX5HzrxSmq$AmTq.D_ACpm`C5@Aoa7&mG68uDD}SC!' );
define( 'LOGGED_IN_SALT',   '}K?KY.:[L]LjI_h~l{AQ*fZmB~t#:2v|PV{}sQi(]NZ!6o,rZyS%k%pkQ[V^gF.>' );
define( 'NONCE_SALT',       '+SLYN_r+nCa%L$;2?|Vx }8J!U8qP|+Y)) sk}HMj#E5t(w*7+8|tbCmi8Ou|wn9' );

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
