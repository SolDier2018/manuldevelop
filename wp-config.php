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
define( 'DB_NAME', 'web-dev' );

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
define( 'AUTH_KEY',         '_Bf.<G]Et9Dn$Ij4?_:LO bA+l{Ju)S~jpkfAy`dD0XIgKU)I39zxg}-3=C][fK~' );
define( 'SECURE_AUTH_KEY',  'yH?a1HbJ6Nlke~OubuU1Wn(5C,)S4ilSgu1-ehEEOOGs(7jq7IVx4lO_-@}BGXjW' );
define( 'LOGGED_IN_KEY',    '</U25+d9].m<8S3LetSLX+(,g@`AHos^2&-+a~7!Qh=XYj&$p]D!6p(&M }T`.&d' );
define( 'NONCE_KEY',        'h!9&9Qg6!e,Iu)<{>|R$;kmh_tq}3se$pjmgXF]_E.Uu%XmPbeh7p+[yQ7oT~x,?' );
define( 'AUTH_SALT',        '(-!FV|QLc-.`|sRtjNf3p1VqwA26@I-)^S]CJ::?f:[W7H`&q%0GESI^N.xij>l7' );
define( 'SECURE_AUTH_SALT', '<z :,#+.9T9UAkh(zZh;]n6a#x^;~PBga&,x}8l4`5VR9*pg8i0K{|rIeEkG.u!t' );
define( 'LOGGED_IN_SALT',   '1iT$9Gp;aOU)4G]~,<>BOI+p(p<YfrtV+#Kf-a#C=?/r2BMDyzQC+38Gw /mBei`' );
define( 'NONCE_SALT',       'xZM3U|.j{r;h.b-7{)5Zwjh8xYetpc!OBI0^RJ9$-|3in}Lk9IFe>NH3rhengUYw' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
