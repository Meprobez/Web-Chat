<?php
/**
* @package   WebChat
* @subpackage 
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/


require_once (JELIX_LIB_CORE_PATH.'response/jResponseBasicHtml.class.php');

class myHtmlResponse extends jResponseBasicHtml {
	
    function __construct() {
        parent::__construct();
		
    }
	
    protected function doAfterActions() {
        // Include all process in common for all actions, like the settings of the
        // main template, the settings of the response etc..
    }
}