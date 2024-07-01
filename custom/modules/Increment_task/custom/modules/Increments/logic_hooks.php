<?php
$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'][] = Array(
    1,
    'Auto Increment Field',
    'custom/modules/YourModule/AutoIncrementLogicHook.php',
    'AutoIncrementLogicHook',
    'incrementField'
);

$hook_array['after_save'][] = Array(
    1,
    'Update Parent Module Field',
    'custom/modules/YourModule/UpdateParentModuleLogicHook.php',
    'UpdateParentModuleLogicHook',
    'updateParentField'
);
?>
