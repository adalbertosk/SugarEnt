<?php

$dependencies['Accounts']['hide_website'] = array(
    'hooks' => array("edit"),
    'triggerFields' => array('pr_hide_website'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'website',
                'value' => 'equal($pr_hide_website, "")',
            ),
        ),
    ),
);