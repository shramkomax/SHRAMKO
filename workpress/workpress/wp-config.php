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
define( 'DB_NAME', 'workpress' );

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
define( 'AUTH_KEY',         '-8esiiECM*89EF+XeCr7uRPV?6op{$/)-lTbB61`$.GRvmf0,j(oH>t92uE^)S>p' );
define( 'SECURE_AUTH_KEY',  '{l|nberA<|kL,-D.)4-Qn3/@x:HkOD0rBk=/HMTe;j>E0(tPy[LBzU$Hkxe29),Z' );
define( 'LOGGED_IN_KEY',    '8q`~y{:tBK 9/Ebx!DfG{uzGd<rf7wT@0~uM~cp`kx8P3 !rm~;mVplC8AG}A^sH' );
define( 'NONCE_KEY',        'BG*XA1Kd4}d@Fw|q:e>KY[#U=9W2tc?s7b=q!qX<-^8jTOR)VQhf+14E*Ry TLl)' );
define( 'AUTH_SALT',        'N`0q3]&3_AeMc3^&I*0I2~A)8zyj=iQKU[W+Df(`p8dw?!pl(BDX#vEghX/DLH~k' );
define( 'SECURE_AUTH_SALT', '):eD*P_GG(sg_/Q).r_N%KedcuHLQqGki Mx_hu{zGR3Ejilcgx?[A9[7i|_>x.`' );
define( 'LOGGED_IN_SALT',   'o,2o?]1p@2#2!;+7y7YH%g$I]/k1N1{NRF6UF2yr0^C,gfC@z6Z:9977.M{aM$y$' );
define( 'NONCE_SALT',       'XE;`_d$pa*YQHT7HSCn$F,NmzIpiXKb9@Q:J7Sn{DT.$[_/ rwO,b@p&``B%aLFC' );

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
