<?php

$aantalActiviteiten;

$bucketList = array();

echo "Hoeveel activiteiten wil je toevoegen aan je BucketList? ";

$aantalActiviteiten = readline();

if (!is_numeric($aantalActiviteiten))
{
  echo $aantalActiviteiten . ' is geen nummer';
  exit();
}

for ($i=0; $i < $aantalActiviteiten; $i++)
{
  $teller = $i + 1;
  echo "Activiteit " . $teller . ' : ';
  $bucketList[$i] = readline();
}

echo "Dit zijn de activiteiten in je BucketLists" . "\n";

foreach ($bucketList as $val)
{
  echo $val . "\n";
}


 ?>
