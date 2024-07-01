<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AutoIncrementLogicHook {
    function beforeSave($bean, $event, $arguments) {
        if (empty($bean->auto_increment_field)) {
            global $db;


            $query = "SELECT MAX(auto_increment_field) as max_field FROM increments";
            $result = $db->query($query);
            $row = $db->fetchByAssoc($result);


            $max_field = (int)$row['max_field'];
            $bean->auto_increment_field = $max_field + 1;
        }
    }
}

?>
