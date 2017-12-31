<?php
//----------------------------------------------------------------------------------------
// Database Connection
//----------------------------------------------------------------------------------------
define('DB_TYPE', 'mysql'); // Database Type
define('DB_NAME', 'pdo_bumpstart'); // Database Name
define('DB_USER', 'root'); // Database Username
define('DB_PASSWORD', ''); // Database Password
define('DB_HOST', 'localhost'); // Database Hostname
define('DB_CHARSET', 'utf8'); // Database Charset



$dsn = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try
{
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);
}
catch(PDOException $e)
{
    $error = $e->getMessage() . ' in ' . $e->getFile() . ' on line ' . $e->getLine();
    error_log(MYSQL_DATETIME_TODAY . "|$error\r\n", 3, ERROR_LOG_PATH);
    $subject = "Database Down";
    $email_body = "The Database is down for " . APP_NAME . "\n ERROR: $error";
    send_email(ADMIN_EMAIL_TO, $subject, $email_body, ADMIN_EMAIL_FROM);
    die('<span style="color:red"><h1>FATAL ERROR: No Database Connection</h1></span>');
}