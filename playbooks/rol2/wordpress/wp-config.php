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
define('DB_NAME', 'bascon');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'bascon');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'bascon');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '192.168.26.1');

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
define('AUTH_KEY', 'v@Wq~a/]*UpT+497Sgs2bC%2<h;&::N&geJ}B-8y.g#8@ZP:MJ.0CogFr)?_yOhp');
define('SECURE_AUTH_KEY', '[V5v/rsImy8x*^5b({rUGlhT/R|}jX|iP{:t4{RtoObc=#Z!Qx~Hd7,]AG/CQuN^');
define('LOGGED_IN_KEY', '/C=@qRXm-4n0u`kB;!}eR9(`=&KMG~NP=LP<Z(VW*KSM:Y>_p(wG[~X[KCmc,$qV');
define('NONCE_KEY', 'S^HRh+:~j?xYaetc?zhbRev9a/HLzSmWcbh? Bz`RDW.kRE6$/)RdNaG4W(LqUh`');
define('AUTH_SALT', 'aWeN4]>,2FN8y,xaGHM#vg2r?CU|hr:B+-iP$4jd_(,7<7I_+KpeKx58ht7%q{?.');
define('SECURE_AUTH_SALT', '^1Zl-etD4Gk0$#57)IvJz7fvfF!^6UgRW%EuH|  V,N8 ^*togk6QwQ{{M!xIP%^');
define('LOGGED_IN_SALT', '#CzNI}Im}Fikz,s uEPBbOKxhj4|7}Jqf=+Q~ M]O([8urxEOG}4>XU/s`Bn( 4:');
define('NONCE_SALT', 'qB?b|[s(]Rqd!dFCz*R^l3FNVY^X!9l6D+A2-hIBE->o;VO?n=|=utyF/ss_#r-G');

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


