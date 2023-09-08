<?php
 // created: 2023-09-08 09:46:32
$dictionary['Account']['fields']['new_field_c']['labelValue']='New Field STUDIO';
$dictionary['Account']['fields']['new_field_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Account']['fields']['new_field_c']['enforced']='';
$dictionary['Account']['fields']['new_field_c']['dependency']='';
$dictionary['Account']['fields']['new_field_c']['required_formula']='';
$dictionary['Account']['fields']['new_field_c']['readonly_formula']='';

// new field manually added
$dictionary['Account']['fields']['new_code_c']['name']='new_code_c';
//$dictionary['Account']['fields']['new_code_c']['label']='LBL_NEW_CODE';
//$dictionary['Account']['fields']['new_code_c']['labelValue']='New Field CODE';
$dictionary['Account']['fields']['new_code_c']['type']='varchar';
$dictionary['Account']['fields']['new_code_c']['source']='custom_fields';

$dictionary['Account']['fields']['new_code2_c']['name']='new_code2_c';
$dictionary['Account']['fields']['new_code2_c']['vname']='LBL_NEW_CODE2_C';
$dictionary['Account']['fields']['new_code2_c']['type']='datetime';
$dictionary['Account']['fields']['new_code2_c']['source']='custom_fields';

$dictionary['Account']['fields']['code3_c']['name']='code3_c';
$dictionary['Account']['fields']['code3_c']['vname']='LBL_CODE3_C';
$dictionary['Account']['fields']['code3_c']['type']='varchar';
$dictionary['Account']['fields']['code3_c']['source']='custom_fields';

$dictionary['Account']['fields']['dropdown_c']['name']='dropdown_c';
$dictionary['Account']['fields']['dropdown_c']['vname']='LBL_DROPDOWN_C';
$dictionary['Account']['fields']['dropdown_c']['type']='enum';
$dictionary['Account']['fields']['dropdown_c']['options']='dropdown_list';
$dictionary['Account']['fields']['dropdown_c']['source']='custom_fields';

?>