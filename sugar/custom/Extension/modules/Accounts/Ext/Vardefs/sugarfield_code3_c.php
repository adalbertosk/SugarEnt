<?php
 // created: 2023-10-05 14:56:00
$dictionary['Account']['fields']['code3_c']['len']='255';
$dictionary['Account']['fields']['code3_c']['audited']=false;
$dictionary['Account']['fields']['code3_c']['massupdate']=false;
$dictionary['Account']['fields']['code3_c']['hidemassupdate']=false;
$dictionary['Account']['fields']['code3_c']['importable']='false';
$dictionary['Account']['fields']['code3_c']['duplicate_merge']='disabled';
$dictionary['Account']['fields']['code3_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['code3_c']['merge_filter']='disabled';
$dictionary['Account']['fields']['code3_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['code3_c']['calculated']='true';
$dictionary['Account']['fields']['code3_c']['formula']='concat($new_field_c," ",$new_code_c)';
$dictionary['Account']['fields']['code3_c']['enforced']=true;

 ?>