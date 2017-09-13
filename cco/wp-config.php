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
define('DB_NAME', 'cco');

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
define('AUTH_KEY',         'S1{F5QDB,~pQ6}/-W@y-R[#Rbmg`tLNqM|e[Z)^jIQ1^L.aFu/P5M{uf*40AHQ*w');
define('SECURE_AUTH_KEY',  '0C}:)QDr(EMxivxr+Te|pT,/&hb=UolM;);W%<Ir-(z1d<Qs %AWQP?r+,_Gdv1e');
define('LOGGED_IN_KEY',    'W/t8[LwVgpE#-gSD~|%bVoA<C*}BJ}Ka>>gj6^B9+SxBCp5~_>3bCEh9 =$LXNK_');
define('NONCE_KEY',        '-gkm WZRGP*Bj9leEtq_$CK:oA_0@s9Xb0Ch-~C4ikf8Vy&lwiP+I.!rOdIKcMu?');
define('AUTH_SALT',        'Uqipu2Kv)qw78d`:pp#F}-Qi.Se<+Nj%H^T=PuR_UxZA^wq0,aEKDX7B1.+JmU6q');
define('SECURE_AUTH_SALT', 'j(`T&m}B<UP/&_~_R(GSVXq9uOYd<PSZy_^0@UA,V2ir4Ch,]MU7!yrwc*6X<|wR');
define('LOGGED_IN_SALT',   '?4.nQ8_Z`k[o[DF~RR`5i>e@_wjy1>M,.&!Yh5-&9U><LEnTM`5PI8<24_M*ts -');
define('NONCE_SALT',       '~3_XvIXBZTDtL)ho^`|R)nU];}KGgYJ%-9pQSq)FBqe{<4ssD]*T.^NIRSKh@-K ');

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
