<?php
/**
* @package   WebChat
* @subpackage WebChat
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('basichtml');

$rep->htmlFile = 'D:/wamp64/www/jelix/web-chat/www/main.php';
//Path leHTML File hayav lehiyot Male kolel Konan        
	
        return $rep;
    }
}
