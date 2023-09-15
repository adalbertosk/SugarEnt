<?php
$hook_array['before_save'][] = [
    1,
    'Populate new field',
    'custom/modules/Accounts/LogicHooks/customLogicHook.php',
    'before_save_class',
    'populate_new_field'
];
$hook_array['after_save'][] = [
    2,
    'Update website field',
    'custom/modules/Accounts/LogicHooks/afterSaveLogicHook.php',
    'after_save_class',
    'update_website_field'
];
