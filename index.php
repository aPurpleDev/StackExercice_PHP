<?php

require ('vendor/autoload.php');
include ('template.html');
include ('App/tree.php');
include ('App/I.php');

// function buildTree(array &$anArray, $x = 0) //first browse then fix this
// {
//   $branch = array();
//
//   foreach($anArray as $key){
//   if($anArray['x'] == $x){
//     $leafs = buildTree($anArray,$anArray['x']);
//       if($leafs)
//       {
//         $anArray['y'] = $leafs;
//       }
//         $anArray['y'] = $leafs;
//     }
//     $branch[$x['x']] = $x;
//     unset($anArray[$x['x']]);
//   }
//
//   return $branch;
// }

$f = function(array $browsedarray){
  $i = 0;
  foreach($browsedarray as $values){
  echo 'je parcours l\'index ' . $i . ' la valeur est ' . var_dump($browsedarray[$i]) .  '<br>';
  $i++;
  }
};

$anArray = array('1', '2', '3','4');
$anotherArray = array('1', '2', '3', '4');

echo '<h1> Stack, Iterator and Tree exercice </h1>';
echo '<p>';

$testtree = new Tree($anArray,$anotherArray);
echo '<em> Instance du tableau à 2 dimensions <br></em>';
var_dump($testtree);

echo '<br><em> Parcours du Tree de l\'objet tree </em><br>';

var_dump($testtree->current());

echo '<br><em> Parcours du Stack de l\'objet tree </em><br>';

//array_walk_recursive($testtree, $f);

echo '</p>';
?>
