﻿<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configuraçções de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'espacofashion13');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'espacofashion13');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'ykN5VLnm');

/** nome do host do MySQL */
define('DB_HOST', 'mysql03.espacofashion.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '4b5813d3b8aa3bf20d41b734a09d1177');
define('SECURE_AUTH_KEY', 'c1c69780b792be354b4aa664f0bf0ee4');
define('LOGGED_IN_KEY', '9aa4eaf03c49ef193203f7ee466a4f78');
define('NONCE_KEY', '2cf58a4d13152d36af7b9d17b3a13502');
/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente a
 * língua escolhida deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define ('WPLANG', 'pt_BR');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto do WordPress para o diretório Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
?>
