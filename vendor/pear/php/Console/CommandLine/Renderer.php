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
 * @version   CVS: $Id: Renderer.php,v 1.2 2008/05/22 08:49:22 izi Exp $
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     File available since release 0.1.0
 */

/**
 * Renderers common interface, all renderers must implement this interface.
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
interface Console_CommandLine_Renderer
{
    // usage() {{{

    /**
     * Return the full usage message.
     *
     * @access public
     * @return string the usage message
     */
    public function usage();

    // }}}
    // error() {{{

    /**
     * Return a formatted error message
     *
     * @param string $error the error message to format
     *
     * @access public
     * @return string the error string
     */
    public function error($error);

    // }}}
    // version() {{{

    /**
     * Return the program version string.
     *
     * @access public
     * @return string the version string
     */
    public function version();

    // }}}
}

?>
