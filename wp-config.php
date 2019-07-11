<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bd_site_powerbuilding');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Z])R/`tnaufw}fsKp&;rKfv70A5nsvZZxfXF%ms|!@jfe}<I@ak#cS/~HyxvZx(:');
define('SECURE_AUTH_KEY', 'OYa)R-Zft|3px72[S_qLI/ ]at#xsFN]Y*2gmRC0g46/Yk>tRuC1 q-!G*}YH!gS');
define('LOGGED_IN_KEY', '7NJ8Y*uP->O*C@tXfoz<!w0<`%=P}Lr>ro2m6]>G{GNMHvlIR}7 ,r~3WZp=-~`v');
define('NONCE_KEY', 'pO~a]+[ku;$E?J?li=-M.G5y$eOJEa[)15p41RxQ[=yd7V^`qa_U30%uf;e?+0!_');
define('AUTH_SALT', '<7[&SHJcGiXQ|DC(NLN)aiMN99*D.VLRW)B:PdY~[2hpl7V*f|ZWi[+mxzL9C-)Q');
define('SECURE_AUTH_SALT', '{Q,#R9Q+)F-lGAf=< y- .72T{VIn,3c`kO2^pm8b(lMjIDl@d5lkT}n,LlQ[?b%');
define('LOGGED_IN_SALT', 'VWyG!W4$%bj72a#<esp9|]I7cJ0!vsU~>PrU2<$4^WK{Olp_ldl{rbu|TEmim<UE');
define('NONCE_SALT', 'M*[HKIk{Q0>3v(-5#JZzr<xz#:Rg{eRq>p$oio$@)H5a>;YT:!0D3~v9|Udtidwb');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

