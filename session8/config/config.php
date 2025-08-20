<?php

//The PHP code snippet rtrim(dirname($_SERVER['PHP_SELF']), '/\\') is used to obtain the directory path of the currently executing PHP script, ensuring that any trailing forward or backward slashes are removed.
define('BASE_URL', rtrim(dirname($_SERVER['PHP_SELF']), '/'));

define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc_todo_app');
define('DB_USER', 'root');
define('DB_PASS', '!Jac123456*');