<?php

include 'MyList.php';
$myList = new MyList();
$myList->add(1);
$myList->add(2);
$myList->add(8);
$myList->add(6);
$myList->add(0);


echo implode('-',$myList->toArray()) . '<br>';
//$myList->remove(4);
//$myList->addIndex(4,'a');
//echo implode('-',$myList->toArray()) . '<br>';
//$myList->sort();
//echo implode('-',$myList->toArray()) ;
echo $myList->contains(9);