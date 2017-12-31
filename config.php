<?php
/*
 * PDO Bump Start - Version 1.6
 * Copyright 2018 Galaxy Internet
 * http://www.galaxyinternet.us
*/

//----------------------------------------------------------------------------
// Set App Name
//----------------------------------------------------------------------------

define("APP_NAME", 'PDO Bump Start');
define("VERSION", 'Version 1.6');

//----------------------------------------------------------------------------
// Set Admin Email - Must come before database include for emailing connection errors
//----------------------------------------------------------------------------

define("ADMIN_EMAIL_TO", 'admin@example.com');
define("ADMIN_EMAIL_FROM", 'DoNotReply@example.com');

//----------------------------------------------------------------------------
// Set path, include required files
//----------------------------------------------------------------------------

define('ABSPATH', __dir__ . DIRECTORY_SEPARATOR);
require_once("config" . DIRECTORY_SEPARATOR. "database.php");
require_once("config" . DIRECTORY_SEPARATOR. "functions.php");

//----------------------------------------------------------------------------
// Set Error Reporting
//----------------------------------------------------------------------------

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', '1');

//----------------------------------------------------------------------------
// Date Settings
//----------------------------------------------------------------------------

// Set Timezone
date_default_timezone_set('America/Los_Angeles');

// MySQL Datetime. Format: 2010-07-15 16:33:56
define("MYSQL_DATETIME_TODAY", date("Y-m-d H:i:s"));

//----------------------------------------------------------------------------
// Debugging
//----------------------------------------------------------------------------

define("DEBUG", True); // Display errors, Sql & Sql Parameters, stack trace.

//----------------------------------------------------------------------------
// Error Handling
//----------------------------------------------------------------------------

define("EMAIL_ERROR", False); // Email errors to ADMIN_EMAIL_TO.
define("LOG_ERROR", False); // Log error to file - 0=Off, 1=On

// Custom exception handler function (functions.php)
set_exception_handler("custom_exception");

// Path To error log
define("ERROR_LOG_PATH", ABSPATH . "logs" . DIRECTORY_SEPARATOR . "error.log");

// Set user-defined exception handler function
set_exception_handler("custom_exception");