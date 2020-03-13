<?php
$stud=array(
'ravi','raju','hari','mani','bindu','harry','sindu','sandya','siva','ramu');
$marks=array('67','89','78','70','45','89','88','90','56','77');
print_r($stud);
echo '\n';
print_r($marks);
$val=array_merge($stud,$marks);
echo '\n';
print_r($val);
?>