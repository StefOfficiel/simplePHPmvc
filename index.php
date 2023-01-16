<?php
/**
 * simplePHPmvc
 * 
 * @author Stéphane PICHARD
 * @link https://www.stefofficiel.me
 * @link https://github.com/StefOfficiel/simplePHPmvc
 * @package simplePHPmvc
 * @version 1.0.0
 * @license http://opensource.org/licenses/MIT The MIT License  
 */

session_start();
date_default_timezone_set('Europe/Paris');
require_once('config.php');
require_once('c/functions.php');
require_once('c/construct.php');

// -> construct.php
create_page();
?>