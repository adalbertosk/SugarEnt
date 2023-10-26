<?php
 // created: 2023-10-25 17:08:24
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['sales_stage']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['visibility_grid']=array (
  'trigger' => 'approval_status_c',
  'values' => 
  array (
    'W' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Needs Analysis',
      3 => 'Value Proposition',
      4 => 'Id. Decision Makers',
      5 => 'Perception Analysis',
      6 => 'Proposal/Price Quote',
      7 => 'Negotiation/Review',
      8 => 'Closed Lost',
    ),
    'A' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Needs Analysis',
      3 => 'Value Proposition',
      4 => 'Id. Decision Makers',
      5 => 'Perception Analysis',
      6 => 'Proposal/Price Quote',
      7 => 'Negotiation/Review',
      8 => 'Closed Won',
      9 => 'Closed Lost',
    ),
    'R' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Needs Analysis',
      3 => 'Value Proposition',
      4 => 'Id. Decision Makers',
      5 => 'Perception Analysis',
      6 => 'Proposal/Price Quote',
      7 => 'Negotiation/Review',
      8 => 'Closed Lost',
    ),
  ),
);

 ?>