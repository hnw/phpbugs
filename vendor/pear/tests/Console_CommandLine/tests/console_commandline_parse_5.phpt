--TEST--
Test for Console_CommandLine::parse() method (errors 2).
--SKIPIF--
<?php if(php_sapi_name()!='cli') echo 'skip'; ?>
--ARGS--
--float 2>&1
--FILE--
<?php

require_once 'Console/CommandLine.php' ;
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'tests.inc.php';

try {
    $parser = buildParser1();
    $result = $parser->parse();
} catch (Console_CommandLine_Exception $exc) {
    $parser->displayError($exc->getMessage());
}

?>
--EXPECT--
Error: option "float" require a value.
Type "some_program -h" to get help.
