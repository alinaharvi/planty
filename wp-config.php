<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(;u8mEL*NeK1|KS-MVxY<Y/>~$[#~0;6iCfE#dke^Hqe^p/ZY5|hecx$=12@:eD:' );
define( 'SECURE_AUTH_KEY',  '60gQH>Y!3&M970?WxqA,aONRT^SP&N%Dt!kM7V>YihdbFJR^N.?H/[!siF+5]x$F' );
define( 'LOGGED_IN_KEY',    'nd6qHSH_wz_Sbu  ;8MVSqKxZrf2u[@h97]?WrEou~4z@L.C2es(&G3:8oy!DO(`' );
define( 'NONCE_KEY',        'KZ)b,:%q3X_F~kq/W_53$guLiqWu5x5_!#AT[/xh@Wh,/[v0f$z$,Ff8id+f@BOb' );
define( 'AUTH_SALT',        'v3K+1ipF)84/n|~~{JFIZOB1CwtehMXA}BK];k4et:Sg|KP{`Sl&@RE0}>M;,oIi' );
define( 'SECURE_AUTH_SALT', 'j$,0h~=|L%Z5=VxO`2[rJ|Fm,ip*,[an6WkdL}[r:.iP#lkwqOm78mO>4Bds#)@Z' );
define( 'LOGGED_IN_SALT',   '**Fj~m>SDIcJ[nMS1h8vkkqJ %L*#72)=%ud RWvC~k{c#U^u;Q0f/2{q{W}|[0&' );
define( 'NONCE_SALT',       ']z&dr7?vLK5vS8v!JuS+KTd=&:3O+.[a_;pp]$}>O2&>DNAF1d[n>RO?31b[pct;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '256M');