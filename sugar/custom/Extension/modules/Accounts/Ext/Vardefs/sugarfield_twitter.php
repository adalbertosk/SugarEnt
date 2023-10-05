<?php
 // created: 2023-10-05 15:37:27
$dictionary['Account']['fields']['twitter']['audited']=false;
$dictionary['Account']['fields']['twitter']['massupdate']=false;
$dictionary['Account']['fields']['twitter']['hidemassupdate']=false;
$dictionary['Account']['fields']['twitter']['comments']='The twitter name of the company';
$dictionary['Account']['fields']['twitter']['importable']='false';
$dictionary['Account']['fields']['twitter']['duplicate_merge']='disabled';
$dictionary['Account']['fields']['twitter']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['twitter']['merge_filter']='disabled';
$dictionary['Account']['fields']['twitter']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['twitter']['calculated']='true';
$dictionary['Account']['fields']['twitter']['formula']='related($modified_user_link,"first_name")';
$dictionary['Account']['fields']['twitter']['enforced']=true;

 ?>