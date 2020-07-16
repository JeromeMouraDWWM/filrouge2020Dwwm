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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY', '/(>3u0z]^$qF?- IpKJ?5Idr{(l3DnB07hj3{gjDdIAT%e#(PwNf4~*(^ntAH.ZM' );
define( 'SECURE_AUTH_KEY', 'b~s$kO?b:LS/qmM_MFyluXPGFW69z`p<82>K* *k$_?nmlE>~^Hb1Ruldh%vvMP1' );
define( 'LOGGED_IN_KEY', 'N>4QDE6Pvk<a(;9I*HYZ5(26jomse3<B1EW(L BR8y`wcP;+@!T]WdLNov{TGFDn' );
define( 'NONCE_KEY', 'D-Q>9O>AB`zd8o=QycN!J@YxG^@U{TEIYtY=5LAh)[q(RKX+nfmX|YFY;>m,um+/' );
define( 'AUTH_SALT', 'VIR/6eYSqNRC?iveg^yv`j#H hq?@b.v+8c*5vH#+ 7m>EhyB5^AhvAd2~sLn?$L' );
define( 'SECURE_AUTH_SALT', '7$a+[R5f =CRPr?f^I0{0my62=WEYk[9O#M@urv)WRHP<M{5w^k.B&_eXcy(JEJ+' );
define( 'LOGGED_IN_SALT', '+T_hQ3,w(FSL]38b}_9PdFs:n~fd0vP]QSxl<5(B0NE9+aU>.0zPZ~zY/#yNax4t' );
define( 'NONCE_SALT', '&f*l.;AmtZ+poQeC!]zx&Is|Cz)o2qae-3{$dl;k8X~t^e7BlZmSH!}Q$vOFF,}=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_1I2MqC_';

define( 'DISALLOW_FILE_EDIT', true );

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
