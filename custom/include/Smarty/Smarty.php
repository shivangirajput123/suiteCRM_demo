<?php
require_once 'vendor/smarty/smarty/libs/Smarty.class.php'; // Adjust the path as necessary

// Create a Smarty object
$smarty = new Smarty();

// Register the custom modifier
require_once 'custom/include/Smarty/plugins/modifier.strstr.php';
$smarty->registerPlugin("modifier", "strstr", "smarty_modifier_strstr");

// Assign variables to Smarty
$smarty->assign('variable', 'example string');

// Display the result using the modifier in index.tpl
$smarty->display('vendor/smarty/smarty/demo/templates/index.tpl');
