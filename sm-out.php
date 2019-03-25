<?php
require_once('session.user.php');
Session::start();
Session::destroy();
Session::check();

?>