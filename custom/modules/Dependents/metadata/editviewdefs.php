<?php
$viewdefs['Dependent']['EditView'] = array(
    'templateMeta' => array(
        'includes' => array(
            array(
                'file' => 'custom/modules/Dependents/js/dependentFields.js',
            ),
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                'status_c',
                'reason_c',
            ),
        ),
    ),
);
