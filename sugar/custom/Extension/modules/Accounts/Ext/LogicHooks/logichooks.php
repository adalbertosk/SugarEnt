<?php
$hook_array['before_save'][] = [
    1,
    'Populate new field',
    'custom/modules/Accounts/customLogicHook.php',
    'before_save_class',
    'populate_new_field'
];

?>
