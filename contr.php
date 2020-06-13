<?php
include "First.php";
include "Second.php";

$first = new First();
echo $first->getClassname();
echo "<pre>";
echo $first->getLetter();
echo "<pre>";
$second = new Second();
echo $second->getClassname();
echo "<pre>";
echo $second->getLetter();