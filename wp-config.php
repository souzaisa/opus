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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'opus' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'A9N kpBTC?^@nA=L_Jh8iU1CK<Be44dP%&^f9kAz2{*{+eDUOGzOH?&^Q_W:86Fo' );
define( 'SECURE_AUTH_KEY',  '~g?D]uen276owe/QmtdI?MIx?My+5OcxtNrU{G)Ot5O99?^J;j,w_cd>d9l#W$=+' );
define( 'LOGGED_IN_KEY',    'M$q~V9Pww0gsAkh|1|Yz6]0v{~i)8-l8AzG4|]! ufMZzd]+5L=nNZ5g6mG%&~5#' );
define( 'NONCE_KEY',        'S%X<9*> #+_TK]&-z[,j/8uh<!9bsUL`mDmFlc5k)Gm ]@Qv,gXaU0~!=?%}[K2^' );
define( 'AUTH_SALT',        'DCJ:zu| PLDMg]mG+,dv6nVY|Wm+u07PRd_K#u#_D*+tSldu45KK1f:4HH-<`cij' );
define( 'SECURE_AUTH_SALT', ' >Z7DIe=Rk;@3EJ)dI!fX2enZ4F8OY_Bj_+Dh(6?Hc(|#/RVEd<o$@m>)7r5$<K)' );
define( 'LOGGED_IN_SALT',   'Wh=a@<-orKd~]=r]q]s[Ao%P9SJe3:Vxk{ts>lrl@)J]52AOSk~&5[X:0;Xz`^m*' );
define( 'NONCE_SALT',       'y~`9aJ.NQ-qxH5o0R@aLFh91xS?c)k#|[B6$s0&QJ3zSIpskc0>fU%v#(!q_l{{I' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
