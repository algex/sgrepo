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
define('DB_NAME', 'sggwp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'j-h>8Vr0XpA,)1G{6C|_Xz6Fcw42KCB 7Jo_$osA,!lFR5FMosufyVeh:LDqAgFJ');
define('SECURE_AUTH_KEY', 'Gk@`Qx>0x|C57B~N4g%711hfMwp}Y,n19):kI<_Mc3yYEgYGWe1&72=w{A&5[u@[');
define('LOGGED_IN_KEY', '-Y]@}8m.h/CdK;Ip:PBa06HUR]8ffcpi7t|TP`?jzdgWk;lf^B*&Z{&yvJs[G0vW');
define('NONCE_KEY', '@)JK_+IQA^BHzI=K(K>$yEzMip&}wPF #TA4CwPB&PxoiH8sLMk]@U=+(C!e>lw_');
define('AUTH_SALT', 'j:LZZcsckIu2Yn_WefIaV]fV:bPS+[_5I)1e9Hq+yH[nrb(a7<EQzG)A^3FnfCNx');
define('SECURE_AUTH_SALT', '2dax.B`V0`PuE~#uL2E)Vfz~R;l)O-tX_J%F}|n:PZ?15W>%I)X,K}5hP{MJ+npQ');
define('LOGGED_IN_SALT', 'ApFsS5R`-xGV5]pY,X]?rGWj?XQNoEhLlFgQXC/9YvYLoeWN]^nB}##4v(/Z(KW~');
define('NONCE_SALT', ']BEr*uevoqMzH>;*/2i*$NVU1(oif?>=i{n!m3u0x:LI8G<cWKj/33$5imk%9;S^');

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

