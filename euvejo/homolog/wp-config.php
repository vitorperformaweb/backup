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
define('DB_NAME', 'suba_blog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'avanco');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'vitor2201');

/** Nome do host do MySQL */
define('DB_HOST', 'avanco.performaweb.com.br');

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
define('AUTH_KEY',         'JL/)cAu&Ka9|dZeG{g26s3p93(ckwC|px_$42Y&fwjU$}{o,iHz8<I;Fs_BSs;^2');
define('SECURE_AUTH_KEY',  '!TO$/rmq /rn?{-zWZ!(~7{zrM5`t6(>|VhtPhhoD#|q#4=~t}Gl5X6Vujd>qPNa');
define('LOGGED_IN_KEY',    '/$qe)8sSF*el+?+CF3.SC<TvmWvx]F,B}tBwV8mmA5dN-+_ERw?vJKvF:hSA;}.H');
define('NONCE_KEY',        'e9InlDv*ECCVQh}`jhFxZAH{psDoH=P}tb;&r%5^mhYYpPu3/QDL5dcxb|?*9Y:r');
define('AUTH_SALT',        'm}D&7$rJHtUh4OEwk%+7,T($pgX}D~BS0Gw3vPckC~)f~klBsp[<^S/:%`~r+X&}');
define('SECURE_AUTH_SALT', 'rQ|np[%<ahpOL]{^Wj*VCjKy;K$!AQbC2tX#:umaMu7S`5:5D8=&H Dbob;T4)au');
define('LOGGED_IN_SALT',   '^JO`13{r`V_z}p3%-Uf%VHRT$.AM}()-(DO$F6E<|E[Ao|{]55u~M8w-b!GqKg4e');
define('NONCE_SALT',       '9sx8W,o|A+U/8)@*2U7K=xA=mUv~91@Db|J- T74`5vdLhQT{bJj%FDq9xj+Ig_$');

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
