<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    1,
    'Set Reason Visibility',
    'custom/modules/Custom/ReasonFieldVisibility.php',
    'ReasonFieldVisibility',
    'setReasonVisibility'
);
$hook_array['before_ui_frame'] = Array();
$hook_array['before_ui_frame'][] = Array(
    2,
    'Add Custom JS',
    'custom/modules/Custom/ReasonFieldVisibility.php',
    'ReasonFieldVisibility',
    'addCustomJS'
);
$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(
    3,
    'Register Custom Smarty Plugins',
    'custom/modules/Custom/CustomSmartyPlugin.php',
    'CustomSmartyPlugin',
    'registerPlugins'
);
