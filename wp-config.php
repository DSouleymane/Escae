<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'escae' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^$%6wW,duKu?YsRlhx]pbKituY0PA?2,{k_KH:nibWpGB<N%~aI)uU`O[_[%|>Tl' );
define( 'SECURE_AUTH_KEY',  'ma5w>vk8,z8yxXK}hKgLo{;1a^%L(N%>Ws4jM#aYCSGLKY!H1}aCt6W=uK9o^;N0' );
define( 'LOGGED_IN_KEY',    'RJ?qaIQIa#H;cq=-`i0O% =;6(yWtO1$&gyxW12@|NqO-`9AHi:1pEsH>1kA=R%<' );
define( 'NONCE_KEY',        't/S`d^x`V}8kgmy//dH5V+zFMk?qEKd7u,+=$9S-AJY]GdrmT,HBw5fVXP8[b@mh' );
define( 'AUTH_SALT',        'M)E> Zm/nKnzc1CuU_FAU`;1i,x9,SO2?A%EJ}Ox`YA{xt[,,3hZmRAZgnZBN5c8' );
define( 'SECURE_AUTH_SALT', 'lz7OKaC%G:C4d~IZG>Ya8Eb<lg<>5 q@c$#RZo 2^relB#&6%6uRWC-T~~|c.nEo' );
define( 'LOGGED_IN_SALT',   'ZH`@Of+I}eD3r(z:tCV+O&2vm=Fa=Fxnr^Ev&;yPHkOJ#du)jYB9V+e#?!.C3gzE' );
define( 'NONCE_SALT',       'Y8N;sSWJ$QhxLqp?< 3k{R{pOtQJKI`qO{iW:zMPm#$:6v4s|L6RP@N*/on=Y YM' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
