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
define( 'DB_NAME', 'dpo' );

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
define( 'AUTH_KEY',         'P9Bt6O~,RJ((xy|C&y,{~WZMiyWuA$rP-d]{fEF{FttKZ*0h|g6VlxeUE]$9tZE)' );
define( 'SECURE_AUTH_KEY',  '$+}uJQ(Z9wT6]V3ylWf$e*_V/xi@Yyr1Tzg@E01MyKZ0L_V+}m,G;4&7}T<]/[.;' );
define( 'LOGGED_IN_KEY',    'lD5_xpn3S5j2tg<p*.bq#+Ni]L[oSi2RP-m]-+jq+icAEZq+v7W]hM@|y~AxOJ,b' );
define( 'NONCE_KEY',        'aTj*1RIMCPXzmo?UWqmuFwaDOC~#}ot4J:<w.X!vK~mD ==nVpc2w^{KJi/Ct$NJ' );
define( 'AUTH_SALT',        'O(e-hY+-F-HDRDp]$/i,L:-^gNpJhkCQ$a16^0jq>Ni/?IP<nh3Y/m`.o1-^~`r+' );
define( 'SECURE_AUTH_SALT', 'D8 3W~>@dt+8cKfAvWy3Gx-nGzf4`dON&I{Wqn{W ,~9(X$s+CR:tZw2Yygr,3FA' );
define( 'LOGGED_IN_SALT',   'e6t(0hJHR/;.,o%*}<Q[nYk_AvP(2GOHKLwv* ]Iwf#Bc>`[0pFg=u_71<aD{gYg' );
define( 'NONCE_SALT',       'f}N1B|9Jy;$SB@sEeE.lps6y`0^8AP&ba0@%w8sIsT6#]_ZO&^XpP5YLre?lgCxl' );

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
