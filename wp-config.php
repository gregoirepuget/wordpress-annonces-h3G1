<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'annoncesh3g1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'R),VpX!3 1x7_%$QxcTkAo0BRM%II*L_rVkK@7j}(.%QOi,$_NCM1IqpKhT}1DV>');
define('SECURE_AUTH_KEY',  '7N$YId)!4SNr{URM6M9F[OPEv|dvz3,3wFUVUsC+^T}ZIK6)N7HMvA9pR4`C2@Eo');
define('LOGGED_IN_KEY',    ';,zQ}q[$d?|36n5Rq:*3T%/(/46SF1C>[dmR^rUM_FyN}[!-*{j!z;h,xBKv:7>g');
define('NONCE_KEY',        'W.w$lI;e<tt:4l~QSi*%Ygdz`]>-CGY:cM<WzTEu>^C/R)Sdio3R!I+V;)%kZvpO');
define('AUTH_SALT',        'I3*SKA@=u=cJalX.@onvca{=Q^YbNl:LRFP0%q}d_yxD0:11L?x uQ? QbH63=`5');
define('SECURE_AUTH_SALT', '/T4{^Adk?2|h`zA*xLt[qH9<}7_J*pZSN }Zy`w8,od@%rr`zy=snvr2%r}TzX_u');
define('LOGGED_IN_SALT',   'VGysHL5>4S$tr(y`_k2Rtf2JHNnm##F@PUAY~jk-={J|{eokqQl8nblmM7pp*=+n');
define('NONCE_SALT',       '>Gjdy@ay`=v0iK[;rfF/+,ISxRCm>7v^{PE=lg.(8R0x!00LAeaV&ifpXxO2Ks5?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpjhhkjhkjhkjhrtr_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');