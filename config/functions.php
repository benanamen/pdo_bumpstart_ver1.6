<?php

if (!defined('securepage')) {
  die('<h1>Direct File Access Prohibited</h1>');
  };

//----------------------------------------------------------------------------------------
// Function - Send Admin Emails & log mail errors
//----------------------------------------------------------------------------------------
/**
 * @param $to
 * @param $from
 * @param $subject
 * @param $email_body
 */
function send_email($to, $subject, $email_body, $from)
{
    if (!@mail($to, $subject, $email_body, "From: $from"))
    {
        $error = error_get_last();
        error_log(MYSQL_DATETIME_TODAY . "|{$error['message']}|File: {$error['file']}|Line: {$error['line']} \r\n", 3, ERROR_LOG_PATH);
    }
}

//----------------------------------------------------------------------------------------
// Function - Check log directory and error log
//----------------------------------------------------------------------------------------
/** Check error log file exists/writable */
function check_error_log()
{
    if (is_writable(ERROR_LOG_PATH))
    {
        echo "<div class='success'>The error log file exists and is writeable<br>" . ERROR_LOG_PATH . " </div>\n";
    }
    else
    {
        echo "<div class='error_custom'>The error log file does not exist or is not writable<br>" . ERROR_LOG_PATH . "</div>\n";
    }
} // End Function

//----------------------------------------------------------------------------------------
// Application defined exception handler function
//----------------------------------------------------------------------------------------
/**
 * Custom Exception Handler
 * @param $exception Error data
 */
function custom_exception($exception)
{
    echo '<div class="error_custom"><H4>Fatal Error!</H4></div>';

    $error_msg = $exception->getMessage() . '|' . $exception->getFile() . ' Line ' . $exception->getLine();
    if (EMAIL_ERROR)
    {
        echo '<div class="error_custom"><H4>Admin has been notified</H4></div>';
        error_log("ERROR: $error_msg\n", 1, ADMIN_EMAIL_TO, "From:" . ADMIN_EMAIL_FROM);
    }
    // Write error to log
    if (LOG_ERROR)
    {
        echo '<div class="error_custom"><H4>Error has been logged</H4></div>';
        error_log(MYSQL_DATETIME_TODAY . "|$error_msg\r\n", 3, ERROR_LOG_PATH);
    }

    if (DEBUG)
    {
        echo '<div class="error_custom">Error Message:';
        echo '<pre>';
        echo $exception->getMessage();
        echo '<br>File:' . $exception->getFile();
        echo '<br>Line ' . $exception->getLine();
        echo '</pre>';
        echo '</div>';
        echo '<div class="error_custom">Stack Trace:<br>';
        echo '<pre>';
        echo $exception->getTraceAsString();
        echo '</pre>';
        echo '</div>';
    }

} // End Function