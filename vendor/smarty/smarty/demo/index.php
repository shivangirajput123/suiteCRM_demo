<?php
require_once 'vendor/smarty/smarty/libs/Smarty.class.php'; // Adjust the path as necessary

$smarty = new Smarty();

// Register the custom modifier
require_once 'custom/include/Smarty/plugins/modifier.strpos.php';
$smarty->registerPlugin("modifier", "strpos", "smarty_modifier_strpos");

// Other Smarty configurations and assignments
$smarty->assign('variable', 'example string');

// Display the template with modifier usage
$smarty->display('index.tpl');
?>
