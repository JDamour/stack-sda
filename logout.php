<?php
/**
 * Created by Damour on 4/29/2017 3:52 PM.
 */

require_once 'core/init.php';

$user = new User();
$user->logout();

Redirect::to('index.php');