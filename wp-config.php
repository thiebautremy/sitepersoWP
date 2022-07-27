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
define( 'DB_NAME', 'thiebautremy' );

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
define( 'AUTH_KEY',         '#Mx$^$X.omI-[[og GZO>7jQ#yL2;098*?]aZ)r#>^SDi1K9DZo|aGp>>4(~FD/I' );
define( 'SECURE_AUTH_KEY',  '()z]!oN[{fHWR%Xd,|qh>)|~QNIbN+G(/$0v5QeIZ`-0^}nXoo~;sqx@%CtWCf8`' );
define( 'LOGGED_IN_KEY',    'E|!wAIGlt6y=:3 o~7^BYo@.|*.9M*fj#(xrsg:O8NRjdI)u{v*Z??%z-oBLEdym' );
define( 'NONCE_KEY',        '?vEwM[${WFZrDlRq-}@-hp;n5SH5B@.XO&EyW3VE0k+GZ/k=|CGo_tMk*HpL:n`C' );
define( 'AUTH_SALT',        'R!N|Pc/>VA8.!sj8q?Mk|jf&>;#K}x4.~`8L*L 8}/@m+t-6Z+q-c~8q#EsXUZk$' );
define( 'SECURE_AUTH_SALT', '98bQu/glOce:C5NPRW&`*Tgt-h$}S2kfc`DX}%mW@u3]GPv3T^^dH{`CjBG7>Kp-' );
define( 'LOGGED_IN_SALT',   'VAdhksq.=,?-/`0}{*.7dGZWO&6_i+,YaPtpP)}+VDQSosj.>1|COt+PcV]lG<&%' );
define( 'NONCE_SALT',       'N<_yc}}KtNb(jOk-s8n5IMciV^d7GT4[8K)|]L0!0)Dq%j_C<P_:Etp$o5b;P(w`' );
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
