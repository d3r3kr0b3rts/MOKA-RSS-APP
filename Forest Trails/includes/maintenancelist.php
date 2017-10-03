<?php
$safetyconcerns = array('Hazardous'=>'No', 'Potentially Hazardous'=>'No', 'Not Hazardous'=>'No');
$locations = array(
  'Kitchen'=>'No',
  'Living Room'=>'No',
  'Bedroom'=>'No',
  'Bathroom'=>'No',
  'Basement'=>'No',
  'Attic'=>'No',
  'Hallway'=>'No',
  'Dining Room'=>'No',
  'Office'=>'No',
  'Exterior - Back Porch'=>'No',
  'Exterior - Front Porch'=>'No',
  'Exterior - Yard'=>'No',
  'Garage'=>'No',
  'Pantry'=>'No',
  'Utility Room'=>'No',
  'Laundry Room'=>'No',
  'Med Room'=>'No',
  'Stairs'=>'No'
);
$objects = array(
  'Floor'=>'No',
  'Ceiling'=>'No',
  'Window'=>'No',
  'Door'=>'No',
  'Light'=>'No',
  'Appliance or Electronic'=>'No',
  'Counter or Cupboard'=>'No',
  'Shower or Bathtub'=>'No',
  'Sink'=>'No',
  'Electric Outlet'=>'No',
  'Heat & AC Register'=>'No',
  'Lawn or Plants'=>'No',
  'Banister or Railing'=>'No',
  'Grill'=>'No',
  'Furniture'=>'No',
  'Rug'=>'No',
  'Wall'=>'No'
);
$types = array(
  'Damaged'=>'No',
  'Normal Wear'=>'No',
  'Scuffs/Markings'=>'No',
  'Dirty'=>'No',
  'Leaking/Drafty'=>'No'
);
ksort($safetyconcerns);
ksort($locations);
ksort($objects);
ksort($types);
?>
