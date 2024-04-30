<?php
function parseEnv($file)
{
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $env[$key] = $value;
        }
    }
    return $env;
}

$envFile = file_exists('.env.local') ? '.env.local' : '.env';
$env = parseEnv($envFile);

define('BASE_URL', $env['BASE_URL'] ?? '');
define('ROOT_PATH', realpath(dirname(__FILE__) . '/'));

define('MAIL_HOST', $env['MAIL_HOST'] ?? '');
define('MAIL_USERNAME', $env['MAIL_USERNAME'] ?? '');
define('MAIL_PASSWORD', $env['MAIL_PASSWORD'] ?? '');
define('MAIL_PORT', $env['MAIL_PORT'] ?? '');
define('MAIL_ENCRYPTION', $env['MAIL_ENCRYPTION'] ?? '');
define('MAIL_SEND', $env['MAIL_SEND'] ?? '');

define('NOM_ENTREPRISE', 'Liam Cariou');
