<?php
//if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs["base"]["view"]["reject_popup"] = array(
    "buttons" => array(
        array(
            "name"      => "confirm_button",
            "type"      => "button",
            "label"     => "LBL_CONFIRM_BUTTON_LABEL",
            "css_class" => "btn-invisible btn-link",
        ),
        array(
            "name"      => "cancel_button",
            "type"      => "button",
            "label"     => "LBL_CANCEL_BUTTON_LABEL",
            "css_class" => "btn-invisible btn-link",
        ),
    ),
);