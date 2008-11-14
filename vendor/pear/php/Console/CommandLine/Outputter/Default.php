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
 * @version   CVS: $Id: Default.php,v 1.2 2008/05/22 08:49:22 izi Exp $
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     File available since release 0.1.0
 */

/**
 * The Outputter interface.
 */
require_once 'Console/CommandLine/Outputter.php';

/**
 * Console_CommandLine default Outputter.
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
class Console_CommandLine_Outputter_Default implements Console_CommandLine_Outputter
{
    // stdout() {{{

    /**
     * Writes the message $msg to STDOUT
     *
     * @param string $msg the message to output
     *
     * @return void
     * @access public
     */
    public function stdout($msg)
    {
        fwrite(STDOUT, $msg);
    }

    // }}}
    // stderr() {{{

    /**
     * Writes the message $msg to STDERR
     *
     * @param string $msg the message to output
     *
     * @return void
     * @access public
     */
    public function stderr($msg)
    {
        fwrite(STDERR, $msg);
    }

    // }}}
}

?>
