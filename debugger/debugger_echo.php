<?php
/*
 * Created on 11.02.2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require_once(dirname(__FILE__).'/debugger.php');
 
 class DebuggerEcho implements Debugger {
 		
 		private static $instance = null;
 		
 		protected function __construct() {}
 		
 		private function __clone() {}
 		
 		public static function getInstance() {
 			if (self::$instance == null) {
 				self::$instance = new DebuggerEcho();
 			}
 			return self::$instance;
 		}
 		
 		public function debug($message, $level) {
 			if (DEBUG == "1") {
 				if (DEBUG_INFO == "1" && $level == "info") {
 					$message = "[INFO_BEGIN] " . $message . " [INFO_END]";
 					echo ($message);
 				} elseif (DEBUG_ERROR == "1" && $level == "error") {
 					$message = "[ERROR_BEGIN] " . $message . " [ERROR_END]";
 					echo ($message);
 				} elseif (DEBUG_WAAGE == "1" && $level == "waage") {
 					$message = "[ERROR_BEGIN] " . $message . " [ERROR_END]";
 					echo ($message);
 				}
 			}
 		}
 
 }
 
 /*
 $debugger = DebuggerEcho::getInstance();
 $debugger->debug("Fehler aufgetreten","info");
 */
?>