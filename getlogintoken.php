<?php

use core\session\manager;

require_once("config.php");
header("Content-Type: text/plain");
echo s(manager::get_login_token());
