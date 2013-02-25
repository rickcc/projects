<?php
/**
* Smarty plugin
*
* @package Smarty
* @subpackage PluginsModifier
*/

/**
* Smarty escape modifier plugin
*
* Type:     modifier<br>
* Name:     escape<br>
* Purpose:  escape string for output
*
* @link http://www.smarty.net/manual/en/language.modifier.count.characters.php count_characters (Smarty online manual)
* @author Monte Ohrt <monte at ohrt dot com>
* @param string  $string        input string
* @param string  $esc_type      escape type
* @param string  $char_set      character set, used for htmlspecialchars() or htmlentities()
* @param boolean $double_encode encode already encoded entitites again, used for htmlspecialchars() or htmlentities()
* @return string escaped input string
*/
function smarty_modifier_escape($string, $esc_type = 'html', $char_set = null, $double_encode = true)
{
if (!$char_set) {
$char_set = Smarty::$_CHARSET;
}

switch ($esc_type) {
case 'html':
return htmlspecialchars($string, ENT_QUOTES, $char_set, $double_encode);

case 'htmlall':
if (Smarty::$_MBSTRING) {

$string = htmlspecialchars($string, ENT_QUOTES, $char_set, $double_encode);

return mb_convert_encoding($string, 'HTML-ENTITIES', $char_set);
}
return htmlentities($string, ENT_QUOTES, $char_set, $double_encode);

case 'url':
return rawurlencode($string);

case 'urlpathinfo':
return str_replace('%2F', '/', rawurlencode($string));

case 'quotes':

return preg_replace("%(?<!\\\\)'%", "\\'", $string);

case 'hex':
$return = '';
$_length = strlen($string);
for ($x = 0; $x < $_length; $x++) {
$return .= '%' . bin2hex($string[$x]);
}
return $return;

case 'hexentity':
$return = '';
if (Smarty::$_MBSTRING) {
require_once(SMARTY_PLUGINS_DIR . 'shared.mb_unicode.php');
$return = '';
foreach (smarty_mb_to_unicode($string, Smarty::$_CHARSET) as $unicode) {
$return .= '&#x' . strtoupper(dechex($unicode)) . ';';
}
return $return;
}

$_length = strlen($string);
for ($x = 0; $x < $_length; $x++) {
$return .= '&#x' . bin2hex($string[$x]) . ';';
}
return $return;

case 'decentity':
$return = '';
if (Smarty::$_MBSTRING) {
require_once(SMARTY_PLUGINS_DIR . 'shared.mb_unicode.php');
$return = '';
foreach (smarty_mb_to_unicode($string, Smarty::$_CHARSET) as $unicode) {
$return .= '&#' . $unicode . ';';
}
return $return;
}

$_length = strlen($string);
for ($x = 0; $x < $_length; $x++) {
$return .= '&#' . ord($string[$x]) . ';';
}
return $return;

case 'javascript':

return strtr($string, array('\\' => '\\\\', "'" => "\\'", '"' => '\\"', "\r" => '\\r', "\n" => '\\n', '</' => '<\/'));

case 'mail':
if (Smarty::$_MBSTRING) {
require_once(SMARTY_PLUGINS_DIR . 'shared.mb_str_replace.php');
return smarty_mb_str_replace(array('@', '.'), array(' [AT] ', ' [DOT] '), $string);
}

return str_replace(array('@', '.'), array(' [AT] ', ' [DOT] '), $string);

case 'nonstd':

$return = '';
if (Smarty::$_MBSTRING) {
require_once(SMARTY_PLUGINS_DIR . 'shared.mb_unicode.php');
foreach (smarty_mb_to_unicode($string, Smarty::$_CHARSET) as $unicode) {
if ($unicode >= 126) {
$return .= '&#' . $unicode . ';';
} else {
$return .= chr($unicode);
}
}
return $return;
}

$_length = strlen($string);
for ($_i = 0; $_i < $_length; $_i++) {
$_ord = ord(substr($string, $_i, 1));

if ($_ord >= 126) {
$return .= '&#' . $_ord . ';';
} else {
$return .= substr($string, $_i, 1);
}
}
return $return;

default:
return $string;
}
}

?>