<?php
/*
 * Created on 11.02.2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

//require_once(dirname(__FILE__).'.\..\..\conf\config.php');
require_once(dirname(__FILE__).'/../../class/helper.php');

interface Debugger {
	
	public function debug($message, $level);

}

?>