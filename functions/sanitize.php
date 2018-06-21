<?php
/**
 * Created by Damour on 4/29/2017 3:52 PM.
 */


require_once 'core/init.php';

function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}