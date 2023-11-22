<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8iG<}j5SAMxyJKE*~H(!uey~5 5bQqR,WLLHUl__`[KbF*fAc8Nu!ar*erL gIRr' );
define( 'SECURE_AUTH_KEY',  '~^GUd>{=%2,vsr%@i$^xZO`8ffe=[RID?(w)k6C2rRDMhrY<.G!HT=5(sB{!Ozzn' );
define( 'LOGGED_IN_KEY',    'i ?w4lUlwIb{-a7:JHt$p(mqT_@o_i+dRSX3@(+XZ#|zMT_k6PA0aa|G#1,?].X{' );
define( 'NONCE_KEY',        'Je5A3i(HMJCba&.YgU6U#g9:--G9BpL:M-b]V-2gpP-x++vBq|WR{]MJH;-wfsB?' );
define( 'AUTH_SALT',        'x<1AMd_c7?$r5sgi(Okpfg~C@,HB3TWoE(j7RjDii~mj8iv-<^9.!KM3X,&RajY#' );
define( 'SECURE_AUTH_SALT', 'LcjHASckO-|vBcWd26k(h#JxwE`_Xh(]|c?@|:g,[l$Ywn1C@ie@ht>3n|cL(hv ' );
define( 'LOGGED_IN_SALT',   '$ILtUep{7>G|*)6wO;)+zUN[:[0`AcE<nc!CClL7XX2yug(4XJ2Oo`ohWo3P ~W6' );
define( 'NONCE_SALT',       '!X&LemRyN..4)F$0J&bKgp(=KiyB`)U!ZoO&^nK1o$by@bVAcSmJD]i{W+n0-AE%' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
