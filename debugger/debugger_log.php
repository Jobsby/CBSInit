<?php
/*
 * Created on 11.02.2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 //Hier noch eine Zeile
 require_once 'debugger.php';
 
 class DebuggerLog implements Debugger {
 		
 		private static $instance = null;
 		
 		protected function __construct() {}
 		
 		private function __clone() {}
 		
 		public static function getInstance() {
 			if (self::$instance == null) {
 				self::$instance = new DebuggerLog();
 			}
 			return self::$instance;
 		}
 		
 		public function debug($message, $level) {
 			if (DEBUG == "1") {
 				if (DEBUG_INFO == "1" && $level == "info") {
 					// Datum und Zeit an die message anhängen
					$message = "[" . date("Y/m/d h:i:s", time()) . "] " . $message."\n";
 					error_log ($message, DEBUG_MESSAGE_TYPE, getApplicationPath()."\log\system_out.log");
 				} elseif (DEBUG_ERROR == "1" && $level == "error") {
 					// Datum und Zeit an die message anhängen
					$message = "[" . date("Y/m/d h:i:s", time()) . "] " . $message."\n";
 					error_log ($message, DEBUG_MESSAGE_TYPE, getApplicationPath()."\log\system_error.log");
 				} elseif (DEBUG_WAAGE == "1" && $level == "waage") {
 					// Datum und Zeit an die message anhängen
					$message = "[" . date("Y/m/d h:i:s", time()) . "] " . $message."\n";
 					error_log ($message, DEBUG_MESSAGE_TYPE, getApplicationPath()."\log\system_waage.log");
 				}
 			}
 		}
 		
 }
 
 /*
 $a = "Fehler";
 $debugger = DebuggerLog::getInstance();
 $debugger->debug($a,"info");
 */
?>