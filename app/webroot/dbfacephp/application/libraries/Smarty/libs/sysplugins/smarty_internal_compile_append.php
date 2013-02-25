<?php
/**
* Smarty Internal Plugin Compile Append
*
* Compiles the {append} tag
*
* @package Smarty
* @subpackage Compiler
* @author Uwe Tews
*/

/**
* Smarty Internal Plugin Compile Append Class
*
* @package Smarty
* @subpackage Compiler
*/
class Smarty_Internal_Compile_Append extends Smarty_Internal_Compile_Assign {

/**
* Compiles code for the {append} tag
*
* @param array $args array with attributes from parser
* @param object $compiler compiler object
* @param array $parameter array with compilation parameter
* @return string compiled code
*/
public function compile($args, $compiler, $parameter)
{

$this->required_attributes = array('var', 'value');
$this->shorttag_order = array('var', 'value');
$this->optional_attributes = array('scope', 'index');

$_attr = $this->getAttributes($compiler, $args);

if (isset($_attr['index'])) {
$_params['smarty_internal_index'] = '[' . $_attr['index'] . ']';
unset($_attr['index']);
} else {
$_params['smarty_internal_index'] = '[]';
}
$_new_attr = array();
foreach ($_attr as $key => $value) {
$_new_attr[] = array($key => $value);
}

return parent::compile($_new_attr, $compiler, $_params);
}

}

?>