<?php
/**
* Smarty plugin
*
* @package Smarty
* @subpackage PluginsFilter
*/

/**
* Smarty trimwhitespace outputfilter plugin
*
* Trim unnecessary whitespace from HTML markup.
*
* @author   Rodney Rehm
* @param string                   $source input string
* @param Smarty_Internal_Template $smarty Smarty object
* @return string filtered output
* @todo substr_replace() is not overloaded by mbstring.func_overload - so this function might fail!
*/
function smarty_outputfilter_trimwhitespace($source, Smarty_Internal_Template $smarty)
{
$store = array();
$_store = 0;
$_offset = 0;
$source = preg_replace("/\015\012|\015|\012/", "\n", $source);
if (preg_match_all('#<!--\[[^\]]+\]>.*?<!\[[^\]]+\]-->#is', $source, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
foreach ($matches as $match) {
$store[] = $match[0][0];
$_length = strlen($match[0][0]);
$replace = '@!@SMARTY:' . $_store . ':SMARTY@!@';
$source = substr_replace($source, $replace, $match[0][1] - $_offset, $_length);

$_offset += $_length - strlen($replace);
$_store++;
}
}
$source = preg_replace( '#<!--.*?-->#ms', '', $source );
$_offset = 0;
if (preg_match_all('#<(script|pre|textarea)[^>]*>.*?</\\1>#is', $source, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
foreach ($matches as $match) {
$store[] = $match[0][0];
$_length = strlen($match[0][0]);
$replace = '@!@SMARTY:' . $_store . ':SMARTY@!@';
$source = substr_replace($source, $replace, $match[0][1] - $_offset, $_length);

$_offset += $_length - strlen($replace);
$_store++;
}
}

$expressions = array(
'#(:SMARTY@!@|>)\s+(?=@!@SMARTY:|<)#s' => '\1 \2',

'#(([a-z0-9]\s*=\s*(["\'])[^\3]*?\3)|<[a-z0-9_]+)\s+([a-z/>])#is' => '\1 \4',
'#^\s+<#Ss' => '<',
'#>\s+$#Ss' => '>',
);

$source = preg_replace( array_keys($expressions), array_values($expressions), $source );
$_offset = 0;
if (preg_match_all('#@!@SMARTY:([0-9]+):SMARTY@!@#is', $source, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER)) {
foreach ($matches as $match) {
$store[] = $match[0][0];
$_length = strlen($match[0][0]);
$replace = array_shift($store);
$source = substr_replace($source, $replace, $match[0][1] + $_offset, $_length);

$_offset += strlen($replace) - $_length;
$_store++;
}
}

return $source;
}

?>