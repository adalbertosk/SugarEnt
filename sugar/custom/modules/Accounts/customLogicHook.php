<?php

class before_save_class
{
    function populate_new_field($bean, $event, $arguments)
    {
        if($bean->fetched_row['name'] != $bean->name) {
            $bean->new_field_c = "Field NAME updated";
        }
    }
}

?>