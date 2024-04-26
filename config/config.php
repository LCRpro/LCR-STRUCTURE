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

function isTestDomain($url)
{
    return (strpos($url, 'https://www.beta-test-website.com') !== false);
}

$envFile = isTestDomain($_SERVER['HTTP_HOST']) ? '.env' : '.env.local';
$env = parseEnv($envFile);

define('DB_HOST', $env['DB_HOST'] ?? '');
define('DB_NAME', $env['DB_NAME'] ?? '');
define('DB_USER', $env['DB_USER'] ?? '');
define('DB_PASS', $env['DB_PASS'] ?? '');
define('DB_PORT', $env['DB_PORT'] ?? '');
define('BASE_URL', $env['BASE_URL'] ?? '');
define('ROOT_PATH', realpath(dirname(__FILE__) . '/'));

define('MAIL_HOST', $env['MAIL_HOST'] ?? '');
define('MAIL_USERNAME', $env['MAIL_USERNAME'] ?? '');
define('MAIL_PASSWORD', $env['MAIL_PASSWORD'] ?? '');
define('MAIL_PORT', $env['MAIL_PORT'] ?? '');
define('MAIL_ENCRYPTION', $env['MAIL_ENCRYPTION'] ?? '');
define('MAIL_SEND', $env['MAIL_SEND'] ?? '');

define('NOM_ENTREPRISE', 'Liam Cariou');
?>
