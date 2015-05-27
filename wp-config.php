<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'two_on_wp');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M_6U|lc0JKaJC *W^{j@DJL4~_ZqR95kMDX]eF8PO0,~+Pv?^F>+dOV,&IY:<pGk');
define('SECURE_AUTH_KEY',  'Pgi:R&<eABp7wPpV(sP9=LnO@~akSnYrMM2N4fFQsTX[x5cBj2pTn8;UD<!c-[G-');
define('LOGGED_IN_KEY',    '|{*}4|+m,k;-Z**zz@& }}QaqJIZw1%4q0&>XJNOLTUWZsG0@|clG+{K9u:[&%rB');
define('NONCE_KEY',        'aA5}+c{$p^dl7xYdvFh(RY~K`O8e/ nW$xkiEIu71Ja -t,hoo FOR{g|w#z[W|7');
define('AUTH_SALT',        '=t}9)KQ5mwTowbNg;xl(V&Gr<0@K7F|Eeee{C2eh|W|#`QY<d!E lNhiuQ?Lf`*o');
define('SECURE_AUTH_SALT', 'u&Rk%]_D`+Z|k@$]?6{{6^i:Z5kkr* F#(Z],D|K:Di1wFd |Gk25QtX^[(b`wFM');
define('LOGGED_IN_SALT',   '*1za|Cl;iGhoRI aA?>1Z<D`yOYw]st+]ym-+/Clh3qj9C;5S0PpDRJ+rmr|Xpez');
define('NONCE_SALT',       'zdNT{V:&o4sgF1bQx*&k~H.+s.f~b2uqxj[dSj+diBR~y?N6+UYsr)aA3,I&kjd0');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
