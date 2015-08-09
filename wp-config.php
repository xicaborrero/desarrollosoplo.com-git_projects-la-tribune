<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db_dev_la_tribune');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'db_user_tribune');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'HwJAtZjNBh5mBp2e');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|kP|-UT>>&kz[:9(Mb=TDEUplRKEIFXH%.QP#&)4=oRdu:`GW+yE<c_4}!PI,*0a');
define('SECURE_AUTH_KEY',  'j^A:Onr469Gv!e(;c;8q:`Q8((d*)S?%SB.rJZA=T+}P+d)mNM-=GZpHX8-Z-[hT');
define('LOGGED_IN_KEY',    'ZvFF5Mw)fWUPy>o=~$Q&+*]r]%~U=y-8q|y#c!xF TV2>F-V/,wL#8Y#umJ?0G74');
define('NONCE_KEY',        'sV`I*uWI{1.qk*PP]k[O5O x~%-%(8]rU+2}qsXFhLVOu+AZp$2`yq`}`D:WWp}-');
define('AUTH_SALT',        'S8>pOknHLjMWM!RT4Alz.+16BaMoU04F64s #ntW55P;*r-<[`kl_xAuOH,iDD%I');
define('SECURE_AUTH_SALT', 'RDL/]qTm#xNV`nLBNog.y4:x`#q9m<.EiYQGzVaZ4L}+y$&w~-EujUGvCS<>2d0>');
define('LOGGED_IN_SALT',   'G#,JUWI@z&yFpf2/p<OtqW9 M,xtK-Ck}V`AVehQ$1:I9CVc2Xr/zzL@$+3c/]2r');
define('NONCE_SALT',       '(RjpE R[;b@Ya#u&B*O8#]XW?C$ o:A46XJYM0-X#g&:A?.)s-1[;a^+&l%cPVzR');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'trib_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

/** Configuration auto update - CORE */
define( 'WP_AUTO_UPDATE_CORE', true );
