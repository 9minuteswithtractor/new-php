<?php

namespace postman;

/**
 *  Reports all php errors ( Show all errors, warnings, and notices )
 *  when calling request using postman
 * 
 */

function postmanErrLogs()
{
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    echo 'Let\'s get started! 💪 😎 🚀';
}
