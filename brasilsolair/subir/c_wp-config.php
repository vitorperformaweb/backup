<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'brasilsolair');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'er&4ap  ?!}5J/n] m!a|`{sgr#6!1 m7?X5SSpB_EMU_Sp8^qxApDwVIv::MmY>');
define('SECURE_AUTH_KEY',  '9ddGCnN,6)q[C `YhOmdEt9Yb@}PDOR#j6aR^m=Ma3kXC(J@?_wFy.K:^`f?1855');
define('LOGGED_IN_KEY',    'MH(oh$KqVf148|As9E&?Q|S+5g?#M}mfL2r)o1+NHyr4b*zk_UqA1p-L :p$5l?s');
define('NONCE_KEY',        'm]6z;{V}qPj2:;xaFKC?n5_2PPtg11%9Oi$YaZ_^m&;hj^KIjUId)dwhq[?EA0qQ');
define('AUTH_SALT',        '`JQtY)M<G.IMNmIt=~@oQ#*EVM!^K]|NCR*i%8C[[tP_+-i |U>0pLH0cb7*<)5~');
define('SECURE_AUTH_SALT', '`<8 !]C7:pVm+GLk$ m&jL]SfnGT<vsqO/K5] jcan6[~<w[6Rddc87)S<M.D/[b');
define('LOGGED_IN_SALT',   '&{c1jYOSH4ttqG .]~*qNb>dB)I:w;7>1x0;#g>~(B9f`(09TY_V<F`@n[TIeR-U');
define('NONCE_SALT',       's~_7du-&p$?N2B($=-Ry}-b[(p?U>];kFxXPY]f&={Z,U8d2m&@(g>Lsa2Ni(4X9');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
