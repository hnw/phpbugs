<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR Console_CommandLine package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Console 
 * @package   Console_CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   CVS: $Id: StoreInt.php,v 1.2 2008/05/22 08:49:22 izi Exp $
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     File available since release 0.1.0
 */

/**
 * Required by this class.
 */
require_once 'Console/CommandLine/Action.php';

/**
 * Class that represent the StoreInt action.
 *
 * The execute method store the value of the option entered by the user as an
 * integer in the result option array entry, if the value passed is not an 
 * integer an Exception is raised.
 *
 * @category  Console
 * @package   Console_CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   Release: 1.0.0
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     Class available since release 0.1.0
 */
class Console_CommandLine_Action_StoreInt extends Console_CommandLine_Action
{
    // execute() {{{

    /**
     * Execute the action with the value entered by the user.
     *
     * @param mixed $value  the option value
     * @param array $params an array of optional parameters
     *
     * @return string
     * @access public
     */
    public function execute($value=false, $params=array())
    {
        if (!is_numeric($value)) {
            include_once 'Console/CommandLine/Exception';
            throw Console_CommandLine_Exception::build('OPTION_VALUE_TYPE_ERROR',
                array(
                    'name'  => $this->option->name,
                    'type'  => 'float',
                    'value' => $value
                ), $this->parser);
        }
        $this->setResult((int)$value);
    }
    // }}}
}

?>
