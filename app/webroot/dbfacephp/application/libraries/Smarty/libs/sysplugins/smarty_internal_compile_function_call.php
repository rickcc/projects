<?php

/**
* Smarty Internal Plugin Compile Function_Call
* 
* Compiles the calls of user defined tags defined by {function}
* 
* @package Smarty
* @subpackage Compiler
* @author Uwe Tews 
*/
/**
* Smarty Internal Plugin Compile Function_Call Class
*/
class Smarty_Internal_Compile_Function_Call extends Smarty_Internal_CompileBase {
/**
* Compiles the calls of user defined tags defined by {function}
* 
* @param array $args array with attributes from parser
* @param object $compiler compiler object
* @return string compiled code
*/
public function compile($args, $compiler)
{
$this->compiler = $compiler;
$this->required_attributes = array('name');
$this->optional_attributes = array('_any'); 

$_attr = $this->_get_attributes($args); 

if (isset($_attr['assign'])) {

$_assign = $_attr['assign'];
} 
$_name = trim($_attr['name'], "'"); 

$_output = "<?php \$_template = new Smarty_Template ('string:', \$_smarty_tpl->smarty, \$_smarty_tpl);\n"; 

if (isset($this->smarty->template_functions[$_name]['parameter'])) {

foreach ($this->smarty->template_functions[$_name]['parameter'] as $_key => $_value) {
if (!isset($_attr[$_key])) {
$_output .= "\$_template->assign('$_key',$_value);\n";
} 
} 
} 
if (isset($compiler->template->properties['function'][$_name]['parameter'])) {

foreach ($compiler->template->properties['function'][$_name]['parameter'] as $_key => $_value) {
if (!isset($_attr[$_key])) {
$_output .= "\$_template->assign('$_key',$_value);\n";
} 
} 
} 

unset($_attr['name'], $_attr['assign']); 

if (!empty($_attr)) {

foreach ($_attr as $_key => $_value) {
$_output .= "\$_template->assign('$_key',$_value);\n";
} 
} 

$_output .= "\$_template->compiled_template = \$this->smarty->template_functions['$_name']['compiled'];\n\$_template->mustCompile = false;\n"; 

if (isset($_assign)) {
$_output .= "\$_smarty_tpl->assign($_assign,\$_template->getRenderedTemplate()); ?>";
} else {
$_output .= "echo \$_template->getRenderedTemplate(); ?>";
} 
return $_output;
} 
} 

?>
