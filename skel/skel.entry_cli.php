<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Tutorial
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Tutorial_Controller.php';

ini_set('max_execution_time', 0);

Tutorial_Controller::main_CLI('Tutorial_Controller', '{$action_name}');
