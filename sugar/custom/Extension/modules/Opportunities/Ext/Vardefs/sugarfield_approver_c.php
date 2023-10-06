<?php
 // created: 2023-10-06 19:32:24
$dictionary['Opportunity']['fields']['approver_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['approver_c']['labelValue']='Approver';
$dictionary['Opportunity']['fields']['approver_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['approver_c']['calculated']='1';
$dictionary['Opportunity']['fields']['approver_c']['formula']='related($assigned_user_link,"first_name")';
$dictionary['Opportunity']['fields']['approver_c']['enforced']='1';
$dictionary['Opportunity']['fields']['approver_c']['dependency']='';
$dictionary['Opportunity']['fields']['approver_c']['required_formula']='';
$dictionary['Opportunity']['fields']['approver_c']['readonly_formula']='';

 ?>