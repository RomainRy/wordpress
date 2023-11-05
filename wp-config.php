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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P+q#8deJjG>Wnqbsc1<Wc~<dMfu~ldT RMF8 !~XWT.AfPYV&rWONX^!JCj^]pU5' );
define( 'SECURE_AUTH_KEY',  '}Fd0n_V[;7#F_rG8NuP&U^ON|cU45fQ6}R!_Mwez.Q#Z&4kDR:rHbRNQnzs8%hbA' );
define( 'LOGGED_IN_KEY',    '[d(xQ2=Bn}paVuvE(rO<Ec))I5]qYQh-qFt%Ma>y!c>$Ggzp*c90gk,tIaRE{K2W' );
define( 'NONCE_KEY',        '$dR4Rj;c(`Nz_kr2fm>HXsD-{,tD)$k{ITdO<(n$0n4jayGwbBLPywbk7ymh{9#O' );
define( 'AUTH_SALT',        'K:oRW%>}=c`SzD NZXByMzWLp_e.dXHvnqMSN,>Q5B8>WI4_^3DX#($<,~P4oZ.B' );
define( 'SECURE_AUTH_SALT', 'b_YB.~Z8e4*1,_P}25kZ9bWqks4dWro[e)Q/FbS,6&?5D.SL]l x9VJ;}N}4}txK' );
define( 'LOGGED_IN_SALT',   'Bpo b{1}QyePW>6-f08Fy$!!yW]>v_=mxs3d1dQ~NXD:3g(}q>u-CCY{+{yQ/`pc' );
define( 'NONCE_SALT',       'P083074[iMZt:MyTv-7}bE5gtoJEa}Vy;Nh_CZITbda=!V>+v 69X j$}lmrP|/H' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'azerty_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
