<?php

class CustomSmartyPlugin
{
    function registerPlugins()
    {
        require_once 'include/Smarty/Smarty.php';
        require_once 'custom/include/Smarty/plugins/modifier.key.php';

        $smarty = new Smarty();
        $smarty->registerPlugin("modifier", "key", "smarty_modifier_key");
    }
}
