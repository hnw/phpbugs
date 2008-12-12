<?php /*-*- mode:PHP;tab-width:4;c-basic-offset:4;indent-tabs-mode:nil; -*-*/
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

class phpParserPluginAlertDangerFunction extends phpParserPlugin
{
  protected static $danger_functions =
      array(
            "phpinfo" => 3,
            "var_dump" => 2,
            "print_r" => 2,

            "fopen" => 2,
            "file" => 2,
            "readfile" => 2,
            "file_get_contents" => 2,
            "symlink" => 2,
            "unlink" => 2,
            "mkdir" => 2,
            "rmdir" => 2,
            "rename" => 2,
            "show_source" => 2,
            "highlight_file" => 2,
            "parse_ini_file" => 2,
            );

    public static $rule = array(
        'function_call', TT_STRING, '(', 'function_call_parameter_list', ')');

    public static function execute(&$non_terminal, &$nodes)
    {
        $func_name = $nodes[0]->getTokenString();
        if (isset(self::$danger_functions[$func_name])) {
            printf("危険な関数(%s)が使われています\n", $func_name);
        }
    }
}
